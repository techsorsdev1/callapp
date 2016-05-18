/**
 * File scripts.js.
 */

jQuery(document).ready(function($) {

	if($(this).scrollTop() >= 1) {
		$('.home-header-wrapper').removeClass('homepage-menu');
	}
	else{
		$('.home-header-wrapper').addClass('homepage-menu');
	}

	$(function(){
		$(window).scroll(function() {
			if($(this).scrollTop() >= 1) {
				$('.home-header-wrapper').removeClass('homepage-menu');
			}
			else{
				$('.home-header-wrapper').addClass('homepage-menu');
			}
		});
	});

	$(function(){
		$(window).scroll(function() {
			if($(this).scrollTop() >= 100) {
				$('.back-to-top').fadeIn(200);
			}
			else{
				$('.back-to-top').fadeOut(200);
			}
		});
	});

	$('a[href*="#"]').click(function(event){
		$('html, body').animate({
			scrollTop: $( $.attr(this, 'href') ).offset().top - 50
		}, 400);
		event.preventDefault();
	});

	$('.press-2blocks .press-item:nth-child(2n)').after('<div class="clear-both"></div>');
	$('.press-3blocks .press-item:nth-child(3n)').after('<div class="clear-both"></div>');

	$('.form-sucess-message-close').click(function(event) {
		$('.form-sucess-message-wrapper').fadeOut(200);
	});

	// $('.blue-accordion-title').click(function(event) {
	// 	$('.blue-accordion-content').slideUp(400);
	// 	$(this).parent().children('.blue-accordion-content').slideToggle(300);
	// });

	$(function() {
		$('.blue-accordion-title').click(function(event) {
			if ($(this).parent().children('.blue-accordion-content').is(':visible')) {
				$(this).removeClass('blue-accordion-title-open');
				$(this).parent().children('.blue-accordion-content').slideUp(300);
			} else {
				$('.blue-accordion-content').slideUp(400);
				$('.blue-accordion-title').removeClass('blue-accordion-title-open');
				$(this).addClass('blue-accordion-title-open');
				$(this).parent().children('.blue-accordion-content').slideToggle(300);
			}
		});
	});

	


});
