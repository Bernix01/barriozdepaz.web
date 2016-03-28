<?php
/**
 * Theme functions
 *
 * Sets up the theme and provides some helper functions.
 *
 * @package BPaz
 */

 require_once('inc/wp_bootstrap_navwalker.php');

/* OEMBED SIZING
 ========================== */

if ( ! isset( $content_width ) )
	$content_width = 600;


/* THEME SETUP
 ========================== */

if ( ! function_exists( 'bpaz_setup' ) ):
function bpaz_setup() {

	// Available for translation
	load_theme_textdomain( 'bpaz', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to <head>.
	add_theme_support( 'automatic-feed-links' );

	// Add custom nav menu support
	register_nav_menu( 'primary', __( 'Primary Menu', 'bpaz' ) );

	// Add featured image support
	add_theme_support( 'post-thumbnails' );

	// Enable support for HTML5 markup.
	add_theme_support( 'html5', array(
		'comment-list',
		'search-form',
		'comment-form',
		'gallery',
	) );

	// Add custom image sizes
	// add_image_size( 'name', 500, 300 );

  // Add support to custom header image
  $defaultsh = array(
	'default-image'          => '',
	'width'                  => 1920,
	'height'                 => 1300,
	'flex-height'            => false,
	'flex-width'             => false,
	'uploads'                => true,
	'random-default'         => true,
	'header-text'            => true,
	'default-text-color'     => '',
	'wp-head-callback'       => '',
	'admin-head-callback'    => '',
	'admin-preview-callback' => '',
);
add_theme_support( 'custom-header', $defaultsh );
}
endif;
add_action( 'after_setup_theme', 'bpaz_setup' );


/* SIDEBARS & WIDGET AREAS
 ========================== */
function bpaz_widgets_init() {
	register_sidebar( array(
		'name' => __( 'Sidebar', 'bpaz' ),
		'id' => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
}
add_action( 'widgets_init', 'bpaz_widgets_init' );


/* ENQUEUE SCRIPTS & STYLES
 ========================== */
function bpaz_scripts() {
	// theme style.css file
	wp_enqueue_style( 'bpaz-style', get_stylesheet_uri() );
	wp_enqueue_style( 'bpaz-fa', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css' );

	// threaded comments
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	// vendor scripts
	wp_enqueue_script(
		'vendor',
		get_template_directory_uri() . '/assets/vendor/bootstrap.min.js',
		array('jquery')
	);
	// theme scripts
//	wp_enqueue_script(
//		'theme-init',
//		get_template_directory_uri() . '/assets/theme.js',
//		array('jquery')
//	);
}
add_action('wp_enqueue_scripts', 'bpaz_scripts');


/* MISC EXTRAS
 ========================== */

// Comments & pingbacks display template
include('inc/functions/comments.php');

// Optional Customizations
// Includes: TinyMCE tweaks, admin menu & bar settings, query overrides
include('inc/functions/customizations.php');
