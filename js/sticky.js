jQuery(
    function(){
        jQuery(window).scroll(function(){
            var height = 0;
            var p5Canvas = jQuery("#p5-canvas");
            var logoImage = jQuery("#dmc-logo");

            if(p5Canvas.css("display") == "none"){
                height = p5Canvas.height();
            }else{
                height = logoImage.height();
            }

            console.log(height);

            if(jQuery(this).scrollTop() > height){
                displayStickyHeader();
            }else{
                hideStickyHeader();
            }
        });
    }
);

function displayStickyHeader(){
    jQuery(".header-nav-wrapper").addClass("sticky-header");
    jQuery("#header-logo-wrapper > a > img").css("display", "flex");
    jQuery("#menu-header").css("justify-content", "flex-end");
}

function hideStickyHeader(){
    jQuery(".header-nav-wrapper").removeClass("sticky-header");
    jQuery("#header-logo-wrapper > a > img").css("display", "none");
    jQuery("#menu-header").css("justify-content", "center");
}