jQuery(function() {
	jQuery('#post-format-gallery').click(function(){
		jQuery('#ta_gallery_post_format').show();
		jQuery('#ta_video_post_format,#ta_link_post_format,#ta_quote_post_format,#ta_status_post_format,#ta_audio_post_format').hide();
	});

	jQuery('#post-format-video').click(function(){
		jQuery('#ta_video_post_format').show();
		jQuery('#ta_gallery_post_format,#ta_link_post_format,#ta_quote_post_format,#ta_status_post_format,#ta_audio_post_format').hide();
	});

	jQuery('#post-format-status').click(function(){
		jQuery('#ta_status_post_format').show();
		jQuery('#ta_gallery_post_format,#ta_link_post_format,#ta_quote_post_format,#ta_video_post_format,#ta_audio_post_format').hide();
	});


	jQuery('#post-format-link').click(function(){
		jQuery('#ta_link_post_format').show();
		jQuery('#ta_gallery_post_format,#ta_video_post_format,#ta_quote_post_format,#ta_status_post_format,#ta_audio_post_format').hide();
	});

	jQuery('#post-format-audio').click(function(){
		jQuery('#ta_audio_post_format').show();
		jQuery('#ta_gallery_post_format,#ta_video_post_format,#ta_quote_post_format,#ta_status_post_format,#ta_link_post_format').hide();
	});

	jQuery('#post-format-quote').click(function(){
		jQuery('#ta_quote_post_format').show();
		jQuery('#ta_gallery_post_format,#ta_video_post_format,#ta_audio_post_format,#ta_status_post_format,#ta_link_post_format').hide();
	});

	jQuery('#post-format-0, #post-format-aside, #post-format-chat, #post-format-image ').click(function(){

		jQuery('#ta_gallery_post_format,#ta_video_post_format,#ta_link_post_format,#ta_quote_post_format,#ta_status_post_format,#ta_audio_post_format').hide();

	});

});