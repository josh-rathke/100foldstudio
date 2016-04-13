<?php
/**
 * Author: Ole Fredrik Lie
 * URL: http://olefredrik.com
 *
 * FoundationPress functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0
 */

/** Various clean up functions */
require_once( 'library/cleanup.php' );

/** Required for Foundation to work properly */
require_once( 'library/foundation.php' );

/** Register all navigation menus */
require_once( 'library/navigation.php' );

/** Add desktop menu walker */
require_once( 'library/menu-walker.php' );

/** Add off-canvas menu walker */
require_once( 'library/offcanvas-walker.php' );

/** Create widget areas in sidebar and footer */
require_once( 'library/widget-areas.php' );

/** Return entry meta information for posts */
require_once( 'library/entry-meta.php' );

/** Enqueue scripts */
require_once( 'library/enqueue-scripts.php' );

/** Add theme support */
require_once( 'library/theme-support.php' );

/** Add Header image */
require_once( 'library/custom-header.php' );

/** Add Custom Shortcodes to Editor */
require_once( 'library/editor-shortcodes/shortcodes-settings.php' );


/** Add Widget Scripts
 *  These scripts add all of the necessary scripts to
 *  run widgets on the site.
 */

// Widgetize Areas
require_once( 'library/widgets/widgetize-areas.php' );



/** Add TGM Plugin Activation Class **/
require_once( 'library/tgm-plugin-activation/class-tgm-plugin-activation.php' );
require_once( 'library/tgm-plugin-activation/tgm-plugin-activation-config.php' );

/** Add Custom Post Typs **/
require_once( 'library/custom-post-types/projects_cpt.php' );

/** Add Custom Taxonomies **/
require_once( 'library/custom-taxonomies/project_classification_tax.php' );

/** Add Theme Options **/
require_once( 'library/theme-options.php');

/** Add Custom Meta **/
require_once( 'custom-meta.php' );

/*	Function Get Excerpt By ID
 *	This function allows us to get the excerpt of a
 *	post by the ID of the post, and also allows a
 *	word count to be passed to allow for excerpt length
 *	variability.
 */

function get_excerpt_by_id( $post_id, $excerpt_length = 40, $echo_link = false, $link_text = 'View Post' )
{
	$the_post = get_post( $post_id ); //Gets post ID
	$the_permalink = get_permalink( $post_id );
	$the_excerpt = $the_post->post_content; //Gets post_content to be used as a basis for the excerpt
	$the_excerpt = strip_tags( strip_shortcodes( $the_excerpt ) ); //Strips tags and images
	$words = explode( ' ', $the_excerpt, $excerpt_length + 1 );

	if ( count( $words ) > $excerpt_length ) :
		array_pop( $words );
		array_push( $words, '[…]' );
		$the_excerpt = implode( ' ', $words );

		if ( $echo_link ) {
			$the_excerpt .= "<a href='{$the_permalink}'>{$link_text}</a>";
		}

	endif;

	$the_excerpt = '<p>' . $the_excerpt . '</p>';
	return $the_excerpt;
} ?>