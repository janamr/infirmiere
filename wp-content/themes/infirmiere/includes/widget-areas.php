<?php
/**
 * Register widget areas
 *
 * @package      infirmiere
 * @author       janamr
 * @link         http://www.janaread.com/
 * @copyright    Copyright (c) 2019, janamr
 * @license      GPL-2.0+
 */

// Register front page widget areas
genesis_register_sidebar( array(
	'id'            => 'home-welcome',
	'name'          => __( 'Home Welcome', 'infirmiere' ),
	'description'   => __( 'This is a home widget area that will show on the front page', 'infirmiere' ),
) );
genesis_register_sidebar( array(
	'id'            => 'call-to-action',
	'name'          => __( 'Call to Action', 'infirmiere' ),
	'description'   => __( 'This is a call to action widget area that will show on the front page', 'infirmiere' ),
) );

// Register widget areas. not workig.
genesis_register_sidebar( array(
	'id'          => 'front-page-1',
	'name'        => __( 'Front Page 1', 'infirmiere' ),
	'description' => __( 'This is a widget that goes on the front page.', 'infirmiere' ),
) );