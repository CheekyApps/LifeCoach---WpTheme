<?php
	// Add RSS feed links to <head> for posts and comments.
		add_theme_support( 'automatic-feed-links' );
	// Enable support for Post Thumbnails, and declare two sizes.
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 672, 400, true );
		add_image_size( 'lifecoach', 1038, 576, true );
	
	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

	
	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary'   => __( 'Primary menu', 'lifecoach' ),
		'secondary' => __( 'Secondary menu in right sidebar', 'lifecoach' ),
		'footer-menu' => __( 'Footer Menu', 'lifecoach' )
	) );
	

add_filter('admin_init', 'my_face_settings_register_fields');

function my_face_settings_register_fields()
{
 register_setting('general', 'face', 'esc_attr');
 add_settings_field('face', '<label for="face">'.__('Face Book Link' , 'face' ).'</label>' , 'my_face_settings_fields_html', 'general');
}

function my_face_settings_fields_html()
{
 $value = get_option( 'face', '' );
 echo '<input type="text" id="face" name="face" value="' . $value . '" />';
}

add_filter('admin_init', 'my_tweet_settings_register_fields');

function my_tweet_settings_register_fields()
{
 register_setting('general', 'tweet', 'esc_attr');
 add_settings_field('tweet', '<label for="tweet">'.__('Twitter Link' , 'tweet' ).'</label>' , 'my_tweet_settings_fields_html', 'general');
}

function my_tweet_settings_fields_html()
{
 $value = get_option( 'tweet', '' );
 echo '<input type="text" id="tweet" name="tweet" value="' . $value . '" />';
}
add_filter('admin_init', 'my_pint_settings_register_fields');

function my_pint_settings_register_fields()
{
 register_setting('general', 'pint', 'esc_attr');
 add_settings_field('pint', '<label for="pint">'.__('Pinterest Link' , 'pint' ).'</label>' , 'my_pint_settings_fields_html', 'general');
}

function my_pint_settings_fields_html()
{
 $value = get_option( 'pint', '' );
 echo '<input type="text" id="pint" name="pint" value="' . $value . '" />';
}
add_filter('admin_init', 'my_inst_settings_register_fields');

function my_inst_settings_register_fields()
{
 register_setting('general', 'inst', 'esc_attr');
 add_settings_field('inst', '<label for="inst">'.__('Instagram Link' , 'inst' ).'</label>' , 'my_inst_settings_fields_html', 'general');
}

function my_inst_settings_fields_html()
{
 $value = get_option( 'inst', '' );
 echo '<input type="text" id="inst" name="inst" value="' . $value . '" />';
}
add_filter('admin_init', 'my_coppy_settings_register_fields');

function my_coppy_settings_register_fields()
{
 register_setting('general', 'coppy', 'esc_attr');
 add_settings_field('coppy', '<label for="coppy">'.__('Coppyright Text' , 'coppy' ).'</label>' , 'my_coppy_settings_fields_html', 'general');
}

function my_coppy_settings_fields_html()
{
 $value = get_option( 'coppy', '' );
 echo '<input type="text" id="coppy" name="coppy" value="' . $value . '" />';
}
add_filter('admin_init', 'my_phone_settings_register_fields');

function my_phone_settings_register_fields()
{
 register_setting('general', 'phone', 'esc_attr');
 add_settings_field('phone', '<label for="phone">'.__('Phone' , 'phone' ).'</label>' , 'my_phone_settings_fields_html', 'general');
}

function my_phone_settings_fields_html()
{
 $value = get_option( 'phone', '' );
 echo '<input type="text" id="phone" name="phone" value="' . $value . '" />';
}
?>