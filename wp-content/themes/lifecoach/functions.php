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
	) );
	


?>