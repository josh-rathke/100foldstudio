<?php
/**
 *  Front Page Custom Meta
 *  This file determines what custom meta is displayed
 *  and usable for the front page.
 */

$meta_boxes[] = array(
	'title'  => __( 'Parralax Section', '100foldstudio' ),
    'post_types' => array( 'page' ),
    'context'    => 'normal',
    'priority'   => 'high',
    'autosave'   => true,
	'fields' => array(
		
        array(
			'name' => __( 'Parralax Phrase Text', '100foldstudio' ),
			'id'   => "{$prefix}parralax_phrase",
			'type' => 'text',
            'desc' => 'Enter the phrase you want to be displayed in the parralax section',
		),
        
        array(
            'name'             => __( 'Parallax Background Image', '100foldstudio' ),
            'id'               => "{$prefix}parallax_background_image",
            'type'             => 'image_advanced',
            'max_file_uploads' => 1,
        ),
	),
    'only_on'    => array(
		// 'id'       => array( 1, 2 ),
		// 'slug'  => array( '' ),
        'template' => array( 'front-page.php' ),
		// 'parent'   => array( 10 )
	),
    
); ?>