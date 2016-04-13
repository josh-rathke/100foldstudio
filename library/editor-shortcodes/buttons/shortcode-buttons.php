<?php
/**
 * Add Grid Shortcode to WYSIWYG Editor
 * This will add a button to the wysiwyg editor that allows
 * the end user to create a foundation grid within their post's
 * content.
 *
 * @package WordPress
 * @subpackage FoundationPress
 */

// Render Foundation Columns
function render_foundation_button( $atts, $content = '' ) {

    // Normalize Attributes to Identify Unnamed Attributes
    $atts = normalize_attributes($atts);
    
    // Define Arrays
    

    // Declare Acceptable Attributes
    $atts = shortcode_atts(array(
        'text'      => '',
        'hollow'    => 0,
        'class'     => '',
        'width'     => '',
    ), $atts);

    // Define Column Widths
    $atts['width'] ? $button_styles[] = 'width: ' . $atts['width'] . ';' : null;
    
    // Define Button Color & Hollow Styles
    $atts['hollow'] ? $button_classes[] = 'hollow' : null;

    // Define Additional Classes
    $atts['class'] ? $button_classes[] = $atts['class'] : null;

    // Turn Arrays into String for HTML
    $button_class = isset($button_class) ? implode( ' ', $button_classes ) : null;
    $button_style = isset($button_styles) ? implode( ' ', $button_styles ) : null;

    return do_shortcode( "<button class='{$button_class}' style='{$button_style}'>" . $atts['text'] . '</button>' );
}
add_shortcode( 'fdn-btn', 'render_foundation_button' );