jQuery(document).ready(function(jQuery) {
	jQuery(".tab-titles li").hover(function() {
		jQuery(".tab-content").hide();
		jQuery(".tab-titles li").removeClass('active');					
		jQuery(this).addClass("active");					
		var selected_tab = jQuery(this).find("a").attr("href");
		jQuery(selected_tab).stop().fadeIn();
		return false;
	});
});
