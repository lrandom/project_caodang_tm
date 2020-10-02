(function($) {

    // Preloader 
    jQuery(window).on('load', function() {
        jQuery("#status").fadeOut();
        jQuery("#preloader").delay(200).fadeOut("slow");
    });


    // on ready function
   $(document).ready(function() {
		"use strict";
		
//----------------------- MENU FIXED JS -----------------------//
	
	$(window).scroll(function(){
		var window_top = $(window).scrollTop() + 1; 
		if (window_top > 50) {
			$('.main_menu_wrapper').addClass('menu_fixed animated fadeInDown');
		} else {
			$('.main_menu_wrapper').removeClass('menu_fixed animated fadeInDown');
		}
	});

//----------------------- mobail_menu_main FIXED JS -----------------------//
	
	$(window).scroll(function(){
		var window_top = $(window).scrollTop() + 1; 
		if (window_top > 50) {
			$('.mobail_menu_main').addClass('menu_fixed animated fadeInDown');
		} else {
			$('.mobail_menu_main').removeClass('menu_fixed animated fadeInDown');
		}
	});
	
/*--- Responsive Menu Start ----*/

	$(".navbar-toggle").on("click", function(){
	  var w = $('#sidebar').width();
	  var pos = $('#sidebar').offset().left;
	 
	  if(pos === 0){
	  $("#sidebar").animate({"left": -w}, "slow");
	  }
	  else
	  {
	  $("#sidebar").animate({"left": "0"}, "slow");
	  }
	  
	});

	$("#toggle_close").on("click", function(){
	  var w = $('#sidebar').width();
	  var pos = $('#sidebar').offset().left;
	 
	  if(pos === 0){
	  $("#sidebar").animate({"left": -w}, "slow");
	  }
	  else
	  {
	  $("#sidebar").animate({"left": "0"}, "slow");
	  }
	  
	});
	
(function($){
$(document).ready(function(){

$('#cssmenu li.active').addClass('open').children('ul').show();
	$('#cssmenu li.has-sub>a').on('click', function(){
		$(this).removeAttr('href');
		var element = $(this).parent('li');
		if (element.hasClass('open')) {
			element.removeClass('open');
			element.find('li').removeClass('open');
			element.find('ul').slideUp(200);
		}
		else {
			element.addClass('open');
			element.children('ul').slideDown(200);
			element.siblings('li').children('ul').slideUp(200);
			element.siblings('li').removeClass('open');
			element.siblings('li').find('li').removeClass('open');
			element.siblings('li').find('ul').slideUp(200);
		}
	});

});
})(jQuery);

/*--- Responsive Menu End ----*/

//show hide search form js
	
	$('#search_button').on("click", function(e) {
		$('#search_open').slideToggle();
		e.stopPropagation(); 
	});

	$(document).on("click", function(e){
		if(!(e.target.closest('#search_open'))){	
			$("#search_open").slideUp();   		
		}
   });

   
   
/*--------------------------
scrollUp
---------------------------- */	
	// ===== Scroll to Top ==== 
$(window).scroll(function() {
    if ($(this).scrollTop() >= 100) {       
        $('#return-to-top').fadeIn(200);   
    } else {
        $('#return-to-top').fadeOut(200);  
    }
});
$('#return-to-top').on("click", function() {     
    $('body,html').animate({
        scrollTop : 0                
    }, 500);
});





    });

})(jQuery);
