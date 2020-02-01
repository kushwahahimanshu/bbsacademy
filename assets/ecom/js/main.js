/* -------------------------------------
		CUSTOM FUNCTION WRITE HERE
-------------------------------------- */
jQuery(document).on('ready', function() {
	"use strict";
	jQuery('.tg-themetabnav > li > a').hover(function() {
		jQuery(this).tab('show');
	});
	
	/*--------------------------------------
			BEST BOOK SLIDER				
	--------------------------------------*/
	var _tg_bestsellingbooksslider = jQuery('#tg-bestsellingbooksslider');
	_tg_bestsellingbooksslider.owlCarousel({
		nav: true,
		loop: true,
		margin: 30,
		dots: true,
		navText: [
					'<i class="icon-chevron-left"></i>',
					'<i class="icon-chevron-right"></i>'
				],
		navClass: [
					'owl-prev tg-btnround tg-btnprev',
					'owl-next tg-btnround tg-btnnext'
				],
		responsive: {
			0: { items:1 },
			480: { items:2 },
			600: { items:3 },
			1000: { items:5 },
			1200: { items:6 },
		}
	});
	/*--------------------------------------
			RELATED PRODUCT SLIDER			
	--------------------------------------*/
	var _tg_relatedproductslider = jQuery('#tg-relatedproductslider');
	_tg_relatedproductslider.owlCarousel({
		nav: true,
		loop: true,
		margin: 30,
		dots: true,
		navText: [
					'<i class="icon-chevron-left"></i>',
					'<i class="icon-chevron-right"></i>'
				],
		navClass: [
					'owl-prev tg-btnround tg-btnprev',
					'owl-next tg-btnround tg-btnnext'
				],
		responsive: {
			0: { items:1 },
			568: { items:2 },
			768: { items:2 },
			992: { items:3 },
			1200: { items:4 },
		}
	});
	/* -------------------------------------
			COLLECTION COUNTER
	-------------------------------------- */
	try {
		var _tg_collectioncounters = jQuery('#tg-collectioncounters');
		_tg_collectioncounters.appear(function () {
			
			var _tg_collectioncounter = jQuery('.tg-collectioncounter h3');
			_tg_collectioncounter.countTo({
				formatter: function (value, options) {
					return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
				}
			});
		});
	} catch (err) {}
	/*--------------------------------------
			PICKED BY AUTHOR SLIDER			
	--------------------------------------*/
	var _tg_pickedbyauthorslider = jQuery('#tg-pickedbyauthorslider');
	_tg_pickedbyauthorslider.owlCarousel({
		nav: true,
		loop: true,
		dots: true,
		navText: [
					'<i class="icon-chevron-left"></i>',
					'<i class="icon-chevron-right"></i>'
				],
		navClass: [
					'owl-prev tg-btnround tg-btnprev',
					'owl-next tg-btnround tg-btnnext'
				],
		responsive: {
			0: { items:1 },
			768: { items:2 },
			992: { items:3 },
		}
	});
	
	/*--------------------------------------
			PICKED BY AUTHOR SLIDER			
	--------------------------------------*/
	var _tg_authorsslider = jQuery('#tg-authorsslider');
	_tg_authorsslider.owlCarousel({
		nav: true,
		loop: true,
		dots: true,
		navText: [
					'<i class="icon-chevron-left"></i>',
					'<i class="icon-chevron-right"></i>'
				],
		navClass: [
					'owl-prev tg-btnround tg-btnprev',
					'owl-next tg-btnround tg-btnnext'
				],
		responsive: {
			0: { items:1 },
			600: { items:4 },
			1000: { items:5 },
			1200: { items:6 },
		}
	});
	
	/*------------------------------------------
			PRODUCT INCREASE
	------------------------------------------*/
	jQuery('em.minus').on('click', function () {
		jQuery('#quantity1').val(parseInt(jQuery('#quantity1').val(), 10) - 1);
	});
	jQuery('em.plus').on('click', function () {
		jQuery('#quantity1').val(parseInt(jQuery('#quantity1').val(), 10) + 1);
	});
});