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
		
        // Project Location
        array(
			'name' => __( 'Project Location', '100foldstudio' ),
			'id'   => "{$prefix}project_location",
			'type' => 'text',
            'desc' => 'Enter the location of the project as you wish for it to be displayed here. Anywhere the projects "location" is displayed on the site, such as on the "Our Work" page, this text will be used.'
		),
        
        array(
			'name' => __( 'ISO Country Code', '100foldstudio' ),
			'id'   => "{$prefix}project_country_code",
			'type' => 'text',
            'desc' => 'Enter the two-letter ISO country code of the country that the project resides in. References for country codes can be found here: https://countrycode.org/'
		),
	),
);