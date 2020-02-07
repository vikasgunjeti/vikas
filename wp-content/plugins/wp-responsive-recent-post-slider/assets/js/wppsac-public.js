jQuery(document).ready(function($) {

	// For Slider
	$( '.wppsac-post-slider' ).each(function( index ) {
		
		var slider_id   	= $(this).attr('id');			
		var slider_conf 	= $.parseJSON( $(this).closest('.wppsac-slick-slider-wrp').find('.wppsac-slider-conf').attr('data-conf'));
		
		if( typeof(slider_id) != 'undefined' && slider_id != '' ) {
			jQuery('#'+slider_id).slick({
				dots			: (slider_conf.dots) == "true" ? true : false,
				infinite		: true,
				arrows			: (slider_conf.arrows) == "true" ? true : false,
				speed			: parseInt(slider_conf.speed),
				autoplay		: (slider_conf.autoplay) == "true" ? true : false,
				autoplaySpeed	: parseInt(slider_conf.autoplay_interval),
				slidesToShow	: 1,
				slidesToScroll	: 1,
				rtl             : (slider_conf.rtl) == "true" ? true : false,
			});
		}
	});
	
	// For Carousel
	$( '.wppsac-post-carousel' ).each(function( index ) {
		
		var carousel_id   	= $(this).attr('id');			
		var carousel_conf 	= $.parseJSON( $(this).closest('.wppsac-slick-carousel-wrp').find('.wppsac-carousel-conf').attr('data-conf'));
		
		if( typeof(carousel_id) != 'undefined' && carousel_id != '' ) {
			jQuery('#'+carousel_id).slick({
				dots			: (carousel_conf.dots) == "true" ? true : false,
				infinite		: true,
				arrows			: (carousel_conf.arrows) == "true" ? true : false,
				speed			: parseInt(carousel_conf.speed),
				autoplay		: (carousel_conf.autoplay) == "true" ? true : false,
				autoplaySpeed	: parseInt(carousel_conf.autoplay_interval),
				slidesToShow	: parseInt(carousel_conf.slides_to_show),
				slidesToScroll	: parseInt(carousel_conf.slides_to_scroll),
				rtl             : (carousel_conf.rtl) == "true" ? true : false,	
				responsive 		: [{
				breakpoint 		: 1023,
					settings 		: {					
						slidesToShow 	: (parseInt(carousel_conf.slides_to_show) > 3) ? 3 : parseInt(carousel_conf.slides_to_show),
						slidesToScroll 	: 1,						
						}
					},{
						breakpoint		: 767,
						settings		: {
							slidesToShow 	: (parseInt(carousel_conf.slides_to_show) > 2) ? 2 : parseInt(carousel_conf.slides_to_show),
							slidesToScroll 	: 1,							
						}
					},{
						breakpoint		: 639,
						settings		: {
							slidesToShow 	: 1,
							slidesToScroll 	: 1,							
						}
					},{
						breakpoint		: 479,
						settings		: {
							slidesToShow 	: 1,
							slidesToScroll 	: 1,													
						}
					},{
						breakpoint		: 319,
						settings		: {
							slidesToShow 	: 1,
							slidesToScroll 	: 1,												
						}
					}]		
			}); 
		}
	});	
});