<?php
/**
 * Register widget areas
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0
 */

if ( ! function_exists( '_100foldstudio_sidebar_widgets' ) ) :
function _100foldstudio_sidebar_widgets() {
	register_sidebar(array(
	  'id' => 'sidebar-widgets',
	  'name' => __( 'Sidebar widgets', '100foldstudio' ),
	  'description' => __( 'Drag widgets to this sidebar container.', '100foldstudio' ),
	  'before_widget' => '<article id="%1$s" class="row widget %2$s"><div class="small-12 columns">',
	  'after_widget' => '</div></article>',
	  'before_title' => '<h6>',
	  'after_title' => '</h6>',
	));

	register_sidebar(array(
	  'id' => 'footer-widgets',
	  'name' => __( 'Footer widgets', '100foldstudio' ),
	  'description' => __( 'Drag widgets to this footer container', '100foldstudio' ),
	  'before_widget' => '<article id="%1$s" class="large-4 columns widget %2$s">',
	  'after_widget' => '</article>',
	  'before_title' => '<h6>',
	  'after_title' => '</h6>',
	));
}

add_action( 'widgets_init', '_100foldstudio_sidebar_widgets' );
endif;
?>
