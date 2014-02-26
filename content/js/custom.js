//INITIALIZES FLEXSLIDER
$(document).ready(function() {
	      
    $(".target_blank").click(
          function(){
            return !window.open(this.href);
      });

     jQuery('.flexslider').flexslider({
        animation: "slide",
        directionNav: true,
        slideshow: true, 
        controlNav: true, 
        easing: "swing", 
        slideToStart: 2,
        direction: "horizontal"

    });
});
