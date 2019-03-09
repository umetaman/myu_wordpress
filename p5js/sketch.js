var dmcImage;
var logoImgWidth, logoImgHeight;
var verticalMode = false;

var agents = [];
const AGENT_NUM = 40;
var agentColor;
var connectDistMax;

function preload(){
    dmcImage = loadImage("./image/web_dmc_header.png");
}

function setup(){
    createCanvas(windowWidth, windowHeight);
    initProperties();

    agentColor = color(225);

    for(var i = 0; i < AGENT_NUM; i++){
        var radius = random(5, 10);
        
        agents.push(new Agent(random(0 + radius, windowWidth - radius), random(0 + radius, windowHeight - radius), radius));
    }
}

function draw(){
    background(255);

    for(var i = 0; i < agents.length; i++){
        for(var j = i; j < agents.length; j++){
            if(agents[i].connectedNum > 2){
                break;
            }

            var distance = dist(
                agents[i].position.x, agents[i].position.y,
                agents[j].position.x, agents[j].position.y
                );

            if(distance < connectDistMax){
                stroke(180, 180, 180, map(distance, 0, connectDistMax, 150, 50));
                line(
                    agents[i].position.x, agents[i].position.y,
                    agents[j].position.x, agents[j].position.y
                );

                agents[i].connectedNum++;
            }
        }
    }

    noStroke();
    for(var i = 0; i < agents.length; i++){
        fill(agentColor);
        agents[i].update();
        agents[i].draw();
        agents[i].connectedNum = 0;
    }

    drawLogoImage();
}

function windowResized(){
    resizeCanvas(windowWidth,windowHeight);
    initProperties();
}

function Agent(_x, _y, _r){
    this.position = createVector(_x, _y);
    this.r = _r;
    this.addVector = createVector(random(-1,1), random(-1,1));
    this.connectedNum = 0;

    this.update = function(){
        if(this.position.x < 0 - this.r || this.position.x > windowWidth + this.r){
            this.addVector.x *= -1;
        }
        if(this.position.y < 0 - this.r || this.position.y > windowHeight + this.r){
            this.addVector.y *= -1;
        }

        this.position.x += this.addVector.x;
        this.position.y += this.addVector.y;
    }

    this.draw = function(){
        ellipse(this.position.x, this.position.y, this.r);
    }
}

function initProperties(){
    console.log("windowWidth: {0}, windowHeight: {1}", windowWidth, windowHeight);
    
    //縦
    if(windowWidth < windowHeight){
        logoImgWidth = windowWidth;
        logoImgHeight = logoImgWidth * (3 / 5);
        
        verticalMode = true;
        connectDistMax = windowWidth / 2;
    }
    //横
    else{
        logoImgHeight = windowHeight;
        logoImgWidth = logoImgHeight * (5 / 3);

        verticalMode = false;
        connectDistMax = windowHeight / 2;
    }
}

function drawLogoImage(){
    if(windowWidth / 2 - logoImgWidth * 0.95 > 0){
        image(dmcImage, windowWidth / 2 - logoImgWidth * 0.95, windowHeight / 2 - logoImgHeight / 2, logoImgWidth, logoImgHeight);
    }else{
        image(dmcImage, windowWidth / 2 - logoImgWidth / 2, windowHeight / 2 - logoImgHeight / 2, logoImgWidth, logoImgHeight);
    }
}