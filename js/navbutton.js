jQuery(
    function(){
        jQuery(".header-hover-nav-wrapper").hide();
    }
);

jQuery(
    function(){
        jQuery("#navbutton").click(function(){
            jQuery(".header-hover-nav-wrapper").fadeIn(300);
        });
    }
);

jQuery(
    function(){
        jQuery("#hover-nav-cancel-button").click(function(){
            jQuery(".header-hover-nav-wrapper").fadeOut(200);
        });
    }
);

jQuery(
    function(){
        jQuery("#header-hover-nav > ul > li > a").click(function(){
            jQuery(".header-hover-nav-wrapper").fadeOut(200);
        });
    }
);