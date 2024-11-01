<?php

add_filter( 'cmb_meta_boxes', 'ta_post_format_metaboxes' );

function ta_post_format_metaboxes( array $meta_boxes ) {

	// Start with an underscore to hide fields from custom fields list
	$prefix = 'ta_';

	// Gallery Meta Box
	$meta_boxes['gallery_metabox'] = array(
		'id'         => $prefix . 'gallery_post_format',
		'title'      => __( 'Gallery Post Format Metabox', 'cmb' ),
		'pages'      => array( 'post', ), // Post type
		'context'    => 'normal',
		'priority'   => 'high',
		'show_names' => true, 
		'fields'     => array(
			array(
				'name'         => __( 'Gallery Upload', 'cmb' ),
				'desc'         => __( 'Add your image gallery here', 'cmb' ),
				'id'           => $prefix . 'gallery_meta',
				'type'         => 'file_list',
				'preview_size' => array( 200, 200 ), // Default: array( 50, 50 )
			),
		
		),

	);

	// Link Meta Box
	$meta_boxes['link_metabox'] = array(
		'id'         => $prefix . 'link_post_format',
		'title'      => __( 'Link Post Format Metabox', 'cmb' ),
		'pages'      => array( 'post', ), // Post type
		'context'    => 'normal',
		'priority'   => 'high',
		'show_names' => true, 
		'fields'     => array(
			array(
				'name' => __( 'Link URL', 'cmb' ),
				'desc' => __( 'add your link', 'cmb' ),
				'id'   => $prefix . 'link_meta',
				'type' => 'text_url',
			),
		
		),

	);

	//Quote Meta Box
	$meta_boxes['quote_metabox'] = array(
		'id'         => $prefix . 'quote_post_format',
		'title'      => __( 'Quote Post Format Metabox', 'cmb' ),
		'pages'      => array( 'post', ), // Post type
		'context'    => 'normal',
		'priority'   => 'high',
		'show_names' => true, 
		'fields'     => array(
			array(
				'name' => __( 'Quote Sentence', 'cmb' ),
				'desc' => __( 'Add the quote here', 'cmb' ),
				'id'   => $prefix . 'quote_sentence',
				'type' => 'textarea_small',
			),

			array(
				'name' => __( 'Quote Author', 'cmb' ),
				'desc' => __( 'Name of the author', 'cmb' ),
				'id'   => $prefix . 'quote_author',
				'type' => 'text_medium',

			),

			array(
				'name' => __( 'Author Job', 'cmb' ),
				'desc' => __( 'Job of author', 'cmb' ),
				'id'   => $prefix . 'author_job',
				'type' => 'text_medium',

			),


			array(
				'name' => __( 'Author Image', 'cmb' ),
				'desc' => __( 'Upload an image or enter a URL.', 'cmb' ),
				'id'   => $prefix . 'author_image',
				'type' => 'file',
			),
		
		),

	);

	// Status Meta Box
	$meta_boxes['status_metabox'] = array(
		'id'         => $prefix . 'status_post_format',
		'title'      => __( 'Status Post Format Metabox', 'cmb' ),
		'pages'      => array( 'post', ), // Post type
		'context'    => 'normal',
		'priority'   => 'high',
		'show_names' => true, 
		'fields'     => array(
			array(
				'name' => __( 'Facebook Status', 'cmb' ),
				'desc' => __( 'Facebook embedded status', 'cmb' ),
				'id'   => $prefix . 'facebook_status',
				'type' => 'textarea_code',
			),

			array(
				'name' => __( 'Twitter Status', 'cmb' ),
				'desc' => __( 'Twitter embedded status', 'cmb' ),
				'id'   => $prefix . 'twitter_status',
				'type' => 'textarea_code',
			),

			array(
				'name' => __( 'Google Status', 'cmb' ),
				'desc' => __( 'Google embedded status', 'cmb' ),
				'id'   => $prefix . 'google_status',
				'type' => 'textarea_code',
			),
		
		),

	);

	// Video Meta Box
	$meta_boxes['video_metabox'] = array(
		'id'         => $prefix . 'video_post_format',
		'title'      => __( 'Video Post Format Metabox', 'cmb' ),
		'pages'      => array( 'post', ), // Post type
		'context'    => 'normal',
		'priority'   => 'high',
		'show_names' => true, 
		'fields'     => array(
			array(
				'name' => __( 'Video URL', 'cmb' ),
				'desc' => __( 'For Vimeo/Youtube and Some Of Video Provider that support oEmbed. Just add the url here', 'cmb' ),
				'id'   => $prefix . 'video_embed_url',
				'type' => 'text_url',
			),

			array(
				'name' => __( 'Video Embed', 'cmb' ),
				'desc' => __( 'If you more comfortable with just embed code. Paste in here', 'cmb' ),
				'id'   => $prefix . 'video_embed',
				'type' => 'textarea_code',
			),

			array(
				'name' => __( 'Video File', 'cmb' ),
				'desc' => __( 'If You prefer to upload your own video file. Upload Here', 'cmb' ),
				'id'   => $prefix . 'video_file',
				'type' => 'file',
			),
		
		),

	);


	// Audio Meta Box
	$meta_boxes['audio_metabox'] = array(
		'id'         => $prefix . 'audio_post_format',
		'title'      => __( 'Audio Post Format Metabox', 'cmb' ),
		'pages'      => array( 'post', ), // Post type
		'context'    => 'normal',
		'priority'   => 'high',
		'show_names' => true, 
		'fields'     => array(
			array(
				'name' => __( 'audio URL', 'cmb' ),
				'desc' => __( 'For Spotify/Soundcloud and Some Of Audio Provider that support oEmbed. Just add the url here', 'cmb' ),
				'id'   => $prefix . 'audio_embed_url',
				'type' => 'text_url',
			),

			array(
				'name' => __( 'audio Embed', 'cmb' ),
				'desc' => __( 'If you more comfortable with just embed code. Paste in here', 'cmb' ),
				'id'   => $prefix . 'audio_embed',
				'type' => 'textarea_code',
			),

			array(
				'name' => __( 'audio File', 'cmb' ),
				'desc' => __( 'If You prefer to upload your own Audio file. Upload Here', 'cmb' ),
				'id'   => $prefix . 'audio_file',
				'type' => 'file',
			),
		
		),

	);


	return $meta_boxes;
}

add_action( 'init', 'cmb_initialize_cmb_meta_boxes', 9999 );

/**
 * Initialize the metabox class.
 */
function cmb_initialize_cmb_meta_boxes() {

	if ( ! class_exists( 'cmb_Meta_Box' ) )
		require_once 'init.php';

}
