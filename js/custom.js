!function($) {

      $(document).ready(function(){
        $('.slick-slider').slick({
          accessibility: true,
          arrows: false,
          dots: true,
          fade: true,
          customPaging : function(slider, i) {
      var thumb = $(slider.$slides[i]).data();
      return '<a>'+(i+1)+'</a>';
              },
          });
      });

   //custom function showing current slide
        var $status = $('.pagingInfo');
        var $slickElement = $('.slider');

        $slickElement.on('init reInit afterChange', function (event, slick, currentSlide, nextSlide) {
            //currentSlide is undefined on init -- set it to 0 in this case (currentSlide is 0 based)
            var i = (currentSlide ? currentSlide : 0) + 1;
            $status.text(i + '/' + slick.slideCount);
        });

}(window.jQuery);
