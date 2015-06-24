<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package Impero Media 2015
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function imperomedia15_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'imperomedia15_jetpack_setup' );
