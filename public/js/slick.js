(function($) {

    var revapi24;
    var tpj = jQuery;
	
	
 // on ready function
    $(document).ready(function() {
		"use strict";
		
		$('.slider-for').slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			arrows: false,
			fade: true,
			asNavFor: '.slider-nav',
		});
		$('.slider-nav').slick({
			slidesToShow: 4,
			slidesToScroll: 1,
			asNavFor: '.slider-for',
			dots: false,
			centerMode: false,
			focusOnSelect: true,
			responsive: [{
				breakpoint: 1280,
				settings: {
					slidesToShow: 2
				}
			},{
				breakpoint: 768,
				settings: {
					slidesToShow: 2
				}
			}]
		});
});

})(jQuery);
