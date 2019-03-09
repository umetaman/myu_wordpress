function setup(){
    createCanvas(windowWidth, windowHeight);
}

function draw(){
    background(255);
    fill(255,0,0);
    ellipse(100, 100, 100);
}

function windowResized(){
    resizeCanvas(windowWidth,windowHeight);
}