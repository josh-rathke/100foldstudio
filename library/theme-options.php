<?php

/**
 *  Theme Options
 *  This file determines what options are shown in the 
 *  "Theme Options" menu. These are typically global changes,
 *  or changes that are hard to do on an individual page by page
 *  basis.
 */

if ( ! class_exists( 'Redux' ) ) {
    return;
}

$opt_name = "_100foldstudio_options";

$args = array(
    'opt_name'    => $opt_name,
    'menu_title'  => 'Theme Settings',
    'dev_mode'    => false,
);
 
Redux::setArgs ($opt_name, $args);
 
// Projects Options
$section = array(
    'title'      => 'Our Work',
    'id'         => 'project-options',
    'desc'       => '',
    'icon'       => 'el el-home',
    'fields'     => array(
        
        array(
            'id'=>'our_work_description',
            'type' => 'textarea',
            'title' => __('Our Work Description', 'redux-framework'),
            'desc' => __('Enter the description of the "Our Work" page here.', 'redux-framework'),
        ),
        
        array(
            'id'       => 'project_classification_order',
            'type'     => 'select',
            'data'     => 'categories',
            'args'     => array('taxonomy' => 'project_classification'),
            'multi'    => true,
            'sortable' => true,
            'title'    => __( 'Project Classification Order', 'redux-framework' ),
            'desc'     => __( 'Use this section to determine which Project Classfications should be included in the "Our Work" page, and what order to display them in.', 'redux-framework' ),
        ),
    )
);
Redux::setSection($opt_name, $section);

// Social Media Options
$section = array(
    'title'      => 'Social Media',
    'id'         => 'social-media-options',
    'desc'       => '',
    'icon'       => 'el el-home',
    'fields'     => array(
        
        array(
            'id'=>'twitter_consumer_key',
            'type' => 'text',
            'title' => __('Twitter Consumer Key', 'redux-framework'),
        ),
        
        array(
            'id'=>'twitter_consumer_secret',
            'type' => 'text',
            'title' => __('Twitter Consumer Secret', 'redux-framework'),
        ),
        
        array(
            'id'=>'twitter_access_token',
            'type' => 'text',
            'title' => __('Twitter Access Token', 'redux-framework'),
        ),
        
        array(
            'id'=>'twitter_access_token_secret',
            'type' => 'text',
            'title' => __('Twitter Access Token Secret', 'redux-framework'),
        ),
    )
);
Redux::setSection($opt_name, $section);

?>