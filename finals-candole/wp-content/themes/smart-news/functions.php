<?php

/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Smart News
 * @since 1.0.0
 */

/**
 * Add theme support.
 */
function smart_news_setup()
{

	 load_theme_textdomain( 'smart-news', get_template_directory() . '/languages' );

	// Add support for block styles.
	add_theme_support( 'wp-block-styles' );

	register_nav_menus( array(
        'primary_menu' => __( 'Primary Menu', 'smart-news' ),
    ) );
}
add_action('after_setup_theme', 'smart_news_setup');

/**
 * Enqueue the CSS files.
 *
 * @since 1.0.0
 *
 * @return void
 */
function smart_news_styles()
{

	$min  = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';

	wp_enqueue_style(
		'smart-news-style',
		get_stylesheet_uri(),
		[],
		wp_get_theme()->get('Version')
	);

	wp_enqueue_style(
		'smart-news-font-awesome',
		get_template_directory_uri() . '/assets/css/font-awesome/css/all' . $min . '.css',
		[],
		'5.15.3'
	);
	
	wp_enqueue_style(
		'slick-style',
		get_template_directory_uri() . '/assets/css/slick' . $min . '.css',
		[],
		'1.8.0'
	);
	
	wp_enqueue_script(
		'slick-script',
		get_template_directory_uri() . '/assets/js/slick' . $min . '.js',
		array('jquery'),
		'1.8.0',
		true
	);

	wp_enqueue_script(
		'main-js',
		get_template_directory_uri() . '/assets/js/main' . $min . '.js',
		array('jquery'),
		'1.0.0',
		true
	);
	
	wp_enqueue_style(
		'index-css',
		get_template_directory_uri() . '/assets/css/index' . $min . '.css',
		[],
		'1.0.1'
	);
}
add_action('wp_enqueue_scripts', 'smart_news_styles');

//limit excerpt length
function smart_news_excerpt_length( $length ) {
    if ( is_admin() ) {
            return $length;
    }
    return 20;
}
add_filter( 'excerpt_length', 'smart_news_excerpt_length', 999 );