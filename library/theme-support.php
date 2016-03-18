<?php
/**
 * Register theme support for languages, menus, post-thumbnails, post-formats etc.
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0
 */

if ( ! function_exists( '_100foldstudio_theme_support' ) ) :
function _100foldstudio_theme_support() {
	// Add language support
	load_theme_textdomain( '100foldstudio', get_template_directory() . '/languages' );

	// Add menu support
	add_theme_support( 'menus' );

	// Let WordPress manage the document title
	add_theme_support( 'title-tag' );

	// Add post thumbnail support: http://codex.wordpress.org/Post_Thumbnails
	add_theme_support( 'post-thumbnails' );
    
    // Add Custom Thumbnail Sizes
    if ( function_exists( 'add_image_size' ) ) {
        add_image_size( 'header-image', 2000, 800, true ); // 2.5:1 Ratio
        add_image_size( 'header-thumbnail', 500, 200, true); // 2.5:1 Ratio
        add_image_size( 'bar-image', 1200, 438, true ); // 2.75:1 Ratio
    }
    
    // Add Custom Thumbnail Sizes to "Add Media" Modal
    add_filter('image_size_names_choose', 'custom_image_sizes_choose');
    function custom_image_sizes_choose($sizes) {
        $custom_sizes = array(
            "header-image"  => __( "Header Image (2.5:1)" ),
            "bar-image"     => __( "Bar Image (2.75:1)" ),
        );
        return array_merge($sizes, $custom_sizes);
    }
    
    add_filter('get_image_tag_class','add_image_class', 10, 4);
    function add_image_class($class, $id, $align, $size){
        $class .= ' ' . $size;
        return $class;
    }

	// RSS thingy
	add_theme_support( 'automatic-feed-links' );

}

add_action( 'after_setup_theme', '_100foldstudio_theme_support' );
endif;
?>