(function($) {
    'use strict';

    
        var controllers = $(".code-wrapp.slider1").attr("data-val");
        var contArray = controllers.split(":");
        var arrows = false;
        var dots = false;
        var slides = 6;
  
        if (contArray[1] == "yes") {
          arrows = true;
        }
  
        if (contArray[2] == "yes") {
          dots = true;
        }
  
        slides = contArray[3];
  
        $(".code-wrapp.slider1 .slider-main-wrapper")
          .not(".slick-initialized")
          .slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: arrows,
            fade: true,
            dots: dots,
          });
        
      


})(jQuery);   