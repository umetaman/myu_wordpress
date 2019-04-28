jQuery(
    function(){
        jQuery(window).scroll(function(){
            if(jQuery(this).scrollTop() > 378){
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