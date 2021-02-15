<?php
/**
 * nami functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package nami
 */
function_exists( 'nami_setup' );
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function nami_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on nami, use a find and replace
		 * to change 'nami' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'nami', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		// add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

	add_image_size( 'post-thumbnail', 250, 250, true );

	the_post_thumbnail( 'post-thumbnail' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		// register_nav_menus( array(
		// 	'menu-1' => esc_html__( 'Primary', 'nami' ),
		// ) );

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
			'script',
			'style'
		) );

		// Set up the WordPress core custom background feature.
		// add_theme_support( 'custom-background', apply_filters( 'nami_custom_background_args', array(
		// 	'default-color' => 'ffffff',
		// 	'default-image' => '',
		// ) ) );

		// Add theme support for selective refresh for widgets.
		// add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		// add_theme_support( 'custom-logo', array(
		// 	'height'      => 250,
		// 	'width'       => 250,
		// 	'flex-width'  => true,
		// 	'flex-height' => true,
		// ) );
	} add_action( 'after_setup_theme', 'nami_setup' );


function nami_scripts() {
	// wp_head
	wp_enqueue_style( 'asosiy', get_stylesheet_uri(), [], null );
 // get_template_directory_uri() . '/assets/css/carousel.css', [], null, true);
	// wp_enqueue_style('bootstrap.min', get_template_directory_uri() . '/assets/css/bootstrap.min.css', [w], null, true);
	// wp_enqueue_style( 'script-name', get_template_directory_uri() . '/js/example.js', array(), '1.0.0', true );
	
	// // wp_footer
	// wp_enqueue_script('bundle.min', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', [], null, true);
	// wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/example.js', array(), '1.0.0', true );



	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_user_logged_in() ):
	else:
	 	wp_deregister_style( 'dashicons' ); 
	endif;

	 if (is_front_page() && is_home()) {
	 	wp_dequeue_style( 'wp-block-library' );
	 }

} add_action( 'wp_enqueue_scripts', 'nami_scripts' );


function my_deregister_scripts(){
  wp_deregister_script( 'wp-embed' );
}
add_action( 'wp_footer', 'my_deregister_scripts' );

// REMOVE EMOJI ICONS
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
// Remove dns-prefetch Link from WordPress Head (Frontend)
remove_action( 'wp_head', 'wp_resource_hints', 2 );
remove_action( 'wp_head',      'rest_output_link_wp_head'              );
remove_action( 'wp_head',      'wp_oembed_add_discovery_links'         );
remove_action( 'template_redirect', 'rest_output_link_header', 11 );
remove_action('wp_head', 'wlwmanifest_link');
remove_action ('wp_head', 'rsd_link');
remove_action ('wp_head', 'wlwmanifest_link');