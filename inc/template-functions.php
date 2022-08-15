<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package projectPeople
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function projectPeople_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'projectPeople_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function projectPeople_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'projectPeople_pingback_header' );


function videoSource() {
    $video_source = '';
    $video_file = get_sub_field('video');
    $video_url = get_sub_field('video_url');

		if(get_sub_field('video_source') == "File") {
			if($video_file) {
				$video_source = $video_file;
			}
		}
    
		if(get_sub_field('video_source') == "Url") {
			if($video_url) {
				$video_source = $video_url;
			}
		}
        return $video_source;
}