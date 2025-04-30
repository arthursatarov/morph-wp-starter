<?php
/**
 * Remove unused stuff from wp_head()
 *
 * @package MORPH
 */

namespace MORPH;

add_action( 'after_setup_theme', __NAMESPACE__ . '\cleanup_head' );

function cleanup_head() {
	// Remove WordPress version generator tag (improves security)
	remove_action( 'wp_head', 'wp_generator' );
	add_filter( 'the_generator', '__return_false' );

	// Remove outdated or unnecessary meta tags
	remove_action( 'wp_head', 'wlwmanifest_link' );
	remove_action( 'wp_head', 'rsd_link' );
	remove_action( 'wp_head', 'wp_shortlink_wp_head' );
	remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10 );

	// Remove emoji scripts and styles (reduces unnecessary requests)
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
}
