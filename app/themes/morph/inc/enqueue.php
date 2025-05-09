<?php
/**
 * Enqueue scripts and styles.
 *
 * @package MORPH
 */

namespace MORPH;

add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\enqueue_scripts', 1 );

function enqueue_scripts() {
	// Theme scripts.
	wp_register_script( 'morph', SCRIPTS_URL . '/main.js', array(), THEME_VERSION, true );
	wp_enqueue_script( 'morph' );

	// Theme styles.
	wp_register_style( 'morph', STYLES_URL . '/main.css', array(), THEME_VERSION, 'all' );
	wp_enqueue_style( 'morph' );
}
