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

jQuery(
    function(){
        jQuery('a[href*=#]').click(function(){
            var speed = 400;
            var href = jQuery(this).attr("href");
            var target = jQuery(href == "#" || href == "" ? 'html' : href);
            var position = target.offset().top - 100;

            if(target){
                var targetOffset = target.offset().top;
                jQuery('html, body').animate(
                    {scrollTop: position},
                    speed, "swing"
                );
            }
        })
    }
)