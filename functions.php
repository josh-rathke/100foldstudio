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




/** Add TGM Plugin Activation Class **/
require_once( 'library/tgm-plugin-activation/class-tgm-plugin-activation.php' );
require_once( 'library/tgm-plugin-activation/tgm-plugin-activation-config.php' );


/** Add Custom Post Typs **/
require_once( 'library/custom-post-types/projects_cpt.php' );

/** Add Custom Taxonomies **/
require_once( 'library/custom-taxonomies/project_classification_tax.php' );



if ( ! class_exists( 'Redux' ) ) {
    return;
}

$opt_name = "100 Fold Studio";

$args = array(
    'opt_name'    => $opt_name,
    'dev_mode'    => false,
);
 
Redux::setArgs ($opt_name, $args);

$tabs = array(
    array(
        'id'      => 'redux-help-tab-1',
        'title'   => 'Theme Information 1',
        'content' => '<br />This is the tab content, HTML is allowed.<br />'
    ),
    array(
        'id'      => 'redux-help-tab-2',
        'title'   => 'Theme Information 2',
        'content' => '<br />This is the tab content, HTML is allowed.<br />'
    )
);
Redux::setHelpTab( $opt_name, $tabs );

$content = '<br />This is the sidebar content, HTML is allowed.<br />';
Redux::setHelpSidebar( $opt_name, $content );
 
// The first subsection
$section = array(
    'title'      => 'Front Page',
    'id'         => 'front-page',
    'desc'       => '',
    'icon'       => 'el el-home',
    'fields'     => array(
        array(
            'id'       => 'opt-text-subsection-example',
            'type'     => 'text',
            'title'    => 'Text Field',
            'subtitle' => 'Subtitle',
            'desc'     => 'Field Description',
            'default'  => 'Default Text',
        ),        
    )
);
Redux::setSection($opt_name, $section);

?>