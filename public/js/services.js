(function($) {


// on ready function
    $(document).ready(function() {
		"use strict";

/* testimonial_slider_wrapper js */
	
	$('.testimonial_slider_wrapper .owl-carousel').owlCarousel({
				loop: true,
                margin: 10,
				autoplay:true,
                responsiveClass: true,
				navText : ['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],
                responsive: {
                  0: {
                    items: 1,
                    nav: true
                  },
                  600: {
                    items: 1,
                    nav: true
                  },
                  1000: {
                    items: 1,
                    nav: true,
                    loop: true,
                    margin: 20
                  }
                }
	});
	
	});
})(jQuery);