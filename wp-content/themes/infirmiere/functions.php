<?php

/**
 * Theme customizations
 *
 * @package      infirmiere
 * @author       janamr
 * @link         http://www.janaread.com/
 * @copyright    Copyright (c) 2019, janamr
 * @license      GPL-3.0+
 */

// function my_theme_enqueue_styles() {

//     $parent_style = 'genesis-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.

//     wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
//     wp_enqueue_style( 'child-style',
//         get_stylesheet_directory_uri() . '/style.css',
//         array( $parent_style ),
//         wp_get_theme()->get('Version')
//     );
// }

// Load child theme textdomain.
load_child_theme_textdomain( 'infirmiere' );

add_action( 'genesis_setup', 'infirmiere_setup' );
/**
 * Theme setup.
 *
 * Attach all of the site-wide functions to the correct hooks and filters. All
 * the functions themselves are defined below this setup function.
 *
 * @since 1.0.0
 */
function infirmiere_setup() {

	// Define theme constants.
	define( 'CHILD_THEME_NAME', 'infirmiere' );
	define( 'CHILD_THEME_URL', 'http://github.com/janamr/infirmiere' );
	define( 'CHILD_THEME_VERSION', '1.0.0' );

	// Add HTML5 markup structure.
	add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption'  ) );

	// Add viewport meta tag for mobile browsers.
	add_theme_support( 'genesis-responsive-viewport' );

	// Add theme support for accessibility.
	add_theme_support( 'genesis-accessibility', array(
		'404-page',
		'drop-down-menu',
		'headings',
		'rems',
		'search-form',
		'skip-links',
	) );

	// Add theme support for footer widgets.
	add_theme_support( 'genesis-footer-widgets', 3 );


}


// add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

// // load child theme
// load_child_theme_textdomain('genesis-infirmiere');
// add_action( 'genesis_setup', 'genesis-infirmiere_setup' );

?>