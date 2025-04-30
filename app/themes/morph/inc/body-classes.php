<?php
/**
 * Adds custom classes to the array of <body> classes.
 *
 * @package MORPH
 */

namespace MORPH;

add_filter( 'body_class', __NAMESPACE__ . '\clean_body_classes' );
add_filter( 'body_class', __NAMESPACE__ . '\extra_body_classes' );

/**
 * Clean all default WP body classes
 */
function clean_body_classes( $classes ) {
	$classes = [];

	return $classes;
}

/**
 * Adds custom classes to the array of body classes.
 */
function extra_body_classes( $classes ) {
	$classes = [];

	return $classes;
}
