jQuery(
    function(){
        jQuery(window).scroll(function(){
            console.log(jQuery(this).scrollTop());
            if(jQuery(this).scrollTop() > 378){
                jQuery("#header-nav").addClass("sticky-header");
            }else{
                jQuery("#header-nav").removeClass("sticky-header");
            }
        });
    }
);