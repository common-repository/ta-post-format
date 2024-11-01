<?php
	/*
	Plugin Name: Themes Awesome Post Format
	Plugin URI: http://www.themesawesome.com
	Description: A plugin to add functionality to WordPress post format
	Version: 1.1
	Author: Themes Awesome
	Author URI: http://www.themesawesome.com
	License: GPL2
	*/



define( 'TA_POST_FORMAT_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
define( 'TA_POST_FORMAT_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );



register_activation_hook( __FILE__, array( 'ThemesAwesome Post Format', 'plugin_activation' ) );
register_deactivation_hook( __FILE__, array( 'ThemesAwesome Post Format', 'plugin_deactivation' ) );

add_action( 'ta_post_format_init', array( 'Themes Awesome Post Format', 'init' ) );


require_once( TA_POST_FORMAT_PLUGIN_DIR . '/meta-box/post-functions.php' );

function ta_admin_style() {
		wp_enqueue_script('post-format-admin-sript', TA_POST_FORMAT_PLUGIN_URL . '/js/admin-script.js', array('jquery'), null, true);
		wp_enqueue_style('post-format-admin-style', TA_POST_FORMAT_PLUGIN_URL . '/css/admin-css.css');
}
add_action( 'admin_enqueue_scripts', 'ta_admin_style' );


function ta_post_format_scripts() {

    if (!is_admin()) { 

    wp_register_script( 'ta_flexslider_js', TA_POST_FORMAT_PLUGIN_URL . '/js/flexslider.js' );
    wp_register_script( 'ta_main_js', TA_POST_FORMAT_PLUGIN_URL . '/js/main.js' );		
    wp_register_style( 'ta_flexslider_css', TA_POST_FORMAT_PLUGIN_URL . '/css/flexslider.css' ); 



    wp_enqueue_script('jquery');
    wp_enqueue_script('wp-mediaelement');    
	 wp_enqueue_script('ta_flexslider_js');
	 wp_enqueue_script('ta_main_js');
    wp_enqueue_style( 'ta_flexslider_css' );
	
    } 
} 

add_action( 'wp_head', 'ta_post_format_scripts',0);


function ta_post_format_video() { ?>
	<div class="ta-entry-video"> 
				<?php 
				global $post;
				$video_url = get_post_meta($post->ID, 'ta_video_embed_url', true);
				$video_embed = get_post_meta($post->ID, 'ta_video_embed', true);
				$video_file = get_post_meta($post->ID, 'ta_video_file', true);
				
				if($video_url !== ''){ 
					 echo wp_oembed_get($video_url);
				} 
				
				elseif($video_embed !== '') { 
					 echo $video_embed;
				}

				elseif($video_file !== '') {  ?>

				<?php echo do_shortcode( '[video src="'.$video_file.'"]' ) ?>
					 

				<?php } ?>

	</div> 
<?php }


function ta_post_format_audio() { ?>
		<div class="ta-entry-audio">
					<?php 
					global $post;
					$audio_url = get_post_meta($post->ID, 'ta_audio_embed_url', true);
					$audio_embed = get_post_meta($post->ID, 'ta_audio_embed', true);
					$audio_file = get_post_meta($post->ID, 'ta_audio_file', true);
					
					if($audio_url !== ''){ 
						 echo wp_oembed_get($audio_url);
					} 
					
					elseif($audio_embed !== '') { 
						 echo $audio_embed;
					}

					elseif($audio_file !== '') {  ?>

<?php echo do_shortcode( '[audio src="'.$audio_file.'"]' ) ?>
					<?php } ?>

		</div>
<?php }

function ta_post_format_gallery() {
		global $post;
		$images = get_post_meta($post->ID, 'ta_gallery_meta', true);
		        if( $images){

		            ?>

		            <div class="flex-wrapper">
		            <div id="slider" class="flexslider">
		                <ul class="slides">
		                    <?php foreach( $images as $image ): ?>
		                        <li>
		                            <img src="<?php echo $image; ?>" />
		                      
		                        </li>
		                    <?php endforeach;  ?>
		                </ul>
		            </div>
		            </div>
		     <?php } 

}

function ta_post_format_quote() { 

		global $post;
		$quote_sentence = get_post_meta($post->ID, 'ta_quote_sentence', true);
		$quote_author = get_post_meta($post->ID, 'ta_quote_author', true);
		$author_job = get_post_meta($post->ID, 'ta_author_job', true);
		$author_image = get_post_meta($post->ID, 'ta_author_image', true);

		?>

		<div class="quote-wrap">
		
			<blockquote> 
				<i class="icon icon-fontawesome-webfont"></i>
				<p><?php echo $quote_sentence; ?></p>
			</blockquote>
			<div class="quote-thumb"><img src="<?php echo $author_image; ?>" alt="<?php echo $quote_author; ?>"></div>
			<div class="quote-attribution">
			<p class="quote-author"><?php echo $quote_author; ?></p>
			<cite><?php echo $author_job; ?></cite>
			</div>
		</div>

<?php }

function ta_post_format_link() {

	global $post;
		$link_meta = get_post_meta($post->ID, 'ta_link_meta', true); ?>


	<a href="<?php echo $link_meta; ?>">			
	<div class="post-format-link">
			<h2><?php the_title(); ?></h2>
		</div>
	</a>

<?php }

function ta_post_format_status() { ?>
	
	<div class="ta-entry-status">
	  <?php 
	  global $post;
	  $twitter =  get_post_meta($post->ID, 'ta_twitter_status', true); 
	  $facebook = get_post_meta($post->ID, 'ta_facebook_status', true);
	  $google = get_post_meta($post->ID, 'ta_google_status', true);

		    if($twitter) {
		      echo html_entity_decode($twitter); 
		    }
		    elseif($facebook) {
		      echo str_replace( '&#039;', '\'', html_entity_decode($facebook) );
		    }
		    elseif($google) {
		      echo html_entity_decode($google);
		    }
	  ?>
  </div>


<?php }