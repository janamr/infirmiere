<?php

/**
 * Front page template
 *
 * @package      infirmiere
 * @author       janamr
 * @link         http://www.janaread.com/
 * @copyright    Copyright (c) 2019, janamr
 * @license      GPL-3.0+
 */

  add_action( 'genesis_meta', 'infirmiere_home_page_setup');
 function infirmiere_home_page_setup() {

  $home_sidebars = array(
		'home_welcome' 	   => is_active_sidebar( 'home-welcome' ),
		'call_to_action'   => is_active_sidebar( 'call-to-action' ),
	);

	// Return early if no sidebars are active.
	if ( ! in_array( true, $home_sidebars ) ) {
		return;
	}

	// Add home welcome area if "Home Welcome" widget area is active.
	if ( $home_sidebars['home_welcome'] ) {
		add_action( 'genesis_after_header', 'infirmiere_add_home_welcome' );
	}

	// Add call to action area if "Call to Action" widget area is active.
	if ( $home_sidebars['call_to_action'] ) {
		add_action( 'genesis_after_header', 'infirmiere_add_call_to_action' );
	}

}

/**
 * Display content for the "Home Welcome" section.
 *
 * @since 1.0.0
 */
function infirmiere_add_home_welcome() {

	genesis_widget_area( 'home-welcome',
		array(
			'before' => '<div class="home-welcome"><div class="wrap">',
			'after' => '</div></div>',
		)
	);
}

/**
 * Display content for the "Call to Action" section.
 *
 * @since 1.0.0
 */
function infirmiere_add_call_to_action() {

	genesis_widget_area( 'call-to-action',
		array(
			'before' => '<div class="call-to-action"><div class="wrap">',
			'after' => '</div></div>',
		)
	);
}

// Add markup to display front page widgets.
function display_front_page_1_widget() {

	genesis_widget_area( 'front-page-1', array(
		'before' => '<div class="featured-widget-area"><div class="wrap">',
		'after'  => '</div></div>',
	) );

}

// * Add the page widget in the content - HTML5
add_action( 'genesis_entry_footer', 'new_widget_function_name' );

function new_widget_function_name() {

	genesis_widget_area ('my-widget', array(
        'before' => '<div class="my-widget"><div class="wrap">',
        'after' => '</div></div>',
	) );
}

 genesis();

