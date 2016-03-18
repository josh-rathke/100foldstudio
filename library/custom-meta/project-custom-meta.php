<?php
/**
 *  Project Custom Meta
 *  This file determines what custom meta is displayed
 *  and usable for the project custom post type.
 */

$meta_boxes[] = array(
	'title'  => __( 'Additional Project Information', '100foldstudio' ),
    'post_types' => array( 'project' ),
    'context'    => 'normal',
    'priority'   => 'high',
    'autosave'   => true,
	'fields' => array(
		
        // Project Display Location
        array(
			'name' => __( 'Project Display Location', '100foldstudio' ),
			'id'   => "{$prefix}project_location",
			'type' => 'text',
            'desc' => 'Enter the location of the project as you wish for it to be displayed here. Anywhere the projects "location" is displayed on the site, such as on the "Our Work" page, this text will be used.'
		),
        
        // Project Country Name
        array(
			'name' => __( 'Project Country Name', '100foldstudio' ),
			'id'   => "{$prefix}project_country",
			'type' => 'text',
            'desc' => 'Enter the country name of the project.'
		),
        
        // Project Country Coce
        array(
			'name' => __( 'ISO Country Code', '100foldstudio' ),
			'id'   => "{$prefix}project_country_code",
			'type' => 'text',
            'desc' => 'Enter the two-letter ISO country code of the country that the project resides in. References for country codes can be found here: https://countrycode.org/'
		),
        
        // Project Catch Phrase
        array(
			'name' => __( 'Project Catch Phrase', '100foldstudio' ),
			'id'   => "{$prefix}project_catch_phrase",
			'type' => 'textarea',
            'desc' => 'Enter the projects catch phrase here.'
		),
        
        // Project Country Coce
        array(
			'name' => __( 'Partner', '100foldstudio' ),
			'id'   => "{$prefix}project_partner",
			'type' => 'text',
            'desc' => 'Enter the partner for the project.'
		),
        
        // Project Country Coce
        array(
			'name' => __( 'Impact', '100foldstudio' ),
			'id'   => "{$prefix}project_impact",
			'type' => 'text',
            'desc' => 'Enter the impact of the project.'
		),
        
        // Project Country Coce
        array(
			'name' => __( 'Status', '100foldstudio' ),
			'id'   => "{$prefix}project_status",
			'type' => 'text',
            'desc' => 'Enter the status of the project.'
		),
        
        // Project Country Coce
        array(
			'name' => __( 'Find Out More Link', '100foldstudio' ),
			'id'   => "{$prefix}project_find_out_more",
			'type' => 'text',
            'desc' => 'Enter the url of the find out more link.'
		),
	),
); ?>