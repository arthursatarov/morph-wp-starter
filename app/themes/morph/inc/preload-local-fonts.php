<?php
/**
 * Preloads fonts that are hosted
 * locally into the page header
 *
 * @author Flurin Dürst
 * @link https://github.com/flurinduerst/WPSeed
 *
 * @package MORPH
 */

namespace MORPH;

function preload_local_fonts(): void {
	$font_families = [];

	if ( empty( $font_families ) ) {
		return;
	}

	$font_formats  = [ 'woff2' ];
	$font_base_url = trailingslashit( FONTS_URL );

	foreach ( $font_families as $font_name ) {
		foreach ( $font_formats as $format ) {
			printf(
				'<link rel="preload" href="%s" as="font" type="font/%s" crossorigin>' . PHP_EOL,
				esc_url( $font_base_url . $font_name . '.' . $format ),
				esc_attr( $format )
			);
		}
	}
}

add_action( 'wp_head', __NAMESPACE__ . '\preload_local_fonts');
