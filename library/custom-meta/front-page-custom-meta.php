<?php
/**
 *  Front Page Custom Meta
 *  This file determines what custom meta is displayed
 *  and usable for the front page.
 */

$meta_boxes[] = array(
	'title'  => __( 'Video Header Options', '100foldstudio' ),
    'post_types' => array( 'page' ),
    'context'    => 'normal',
    'priority'   => 'high',
    'autosave'   => true,
	'fields' => array(
		
        array(
			'name' => __( 'Header Tagline', '100foldstudio' ),
			'id'   => "{$prefix}video_header_tagline",
			'type' => 'wysiwyg',
            'desc' => 'This will be the tagline that is superimposed over the video.',
		),
        
        // FILE UPLOAD
        array(
            'name' => __( 'Header Link Destination', 'meta-box' ),
            'id'   => "{$prefix}video_header_link_destination",
            'type' => 'text',
        ),
        
        // FILE UPLOAD
        array(
            'name' => __( 'MP4 File Upload', 'meta-box' ),
            'id'   => "{$prefix}video_header_mp4_file",
            'type' => 'file_advanced',
            'max_file_uploades' => 1,
        ),
        
        // FILE UPLOAD
        array(
            'name' => __( 'WEBM File Upload', 'meta-box' ),
            'id'   => "{$prefix}video_header_webm_file",
            'type' => 'file_advanced',
            'max_file_uploades' => 1,
        ),
        
        // MOV File Upload
        array(
            'name' => __( 'MOV File Upload', 'meta-box' ),
            'id'   => "{$prefix}video_header_mov_file",
            'type' => 'file_advanced',
            'max_file_uploades' => 1,
        ),
        
	),
    'only_on'    => array(
		// 'id'       => array( 1, 2 ),
		// 'slug'  => array( '' ),
        'template' => array( 'front-page.php' ),
		// 'parent'   => array( 10 )
	),
);

$meta_boxes[] = array(
	'title'  => __( "What's New Section", '100foldstudio' ),
    'post_types' => array( 'page' ),
    'context'    => 'normal',
    'priority'   => 'high',
    'autosave'   => true,
	'fields' => array(
		
        array(
			'name' => __( 'Section Title', '100foldstudio' ),
			'id'   => "{$prefix}wn_section_title",
			'type' => 'text',
            'desc' => "Enter the title for the what's new section",
		),
        
	),
    'only_on'    => array(
		// 'id'       => array( 1, 2 ),
		// 'slug'  => array( '' ),
        'template' => array( 'front-page.php' ),
		// 'parent'   => array( 10 )
	),
    
);

$meta_boxes[] = array(
	'title'  => __( "Our Projects Section", '100foldstudio' ),
    'post_types' => array( 'page' ),
    'context'    => 'normal',
    'priority'   => 'high',
    'autosave'   => true,
	'fields' => array(
		
        array(
			'name' => __( 'Section Title', '100foldstudio' ),
			'id'   => "{$prefix}op_section_title",
			'type' => 'text',
            'desc' => "Enter the title for the our projects section",
		),
        
        array(
			'name' => __( 'Section Description', '100foldstudio' ),
			'id'   => "{$prefix}op_section_description",
			'type' => 'textarea',
            'desc' => "Enter the description for the our projects section",
		),
        
        array(
			'name' => __( 'Top Link Text', '100foldstudio' ),
			'id'   => "{$prefix}op_section_tl_text",
			'type' => 'text',
            'desc' => "Enter the text for the top link.",
		),
        
        array(
			'name' => __( 'Top Link URL', '100foldstudio' ),
			'id'   => "{$prefix}op_section_tl_url",
			'type' => 'text',
            'desc' => "Enter the url for the top link.",
		),
        
        array(
			'name' => __( 'Bottom Link Text', '100foldstudio' ),
			'id'   => "{$prefix}op_section_bl_text",
			'type' => 'text',
            'desc' => "Enter the text for the bottom link.",
		),
        
        array(
			'name' => __( 'Bottom Link URL', '100foldstudio' ),
			'id'   => "{$prefix}op_section_bl_url",
			'type' => 'text',
            'desc' => "Enter the url for the bottom link.",
		),
        
	),
    'only_on'    => array(
		// 'id'       => array( 1, 2 ),
		// 'slug'  => array( '' ),
        'template' => array( 'front-page.php' ),
		// 'parent'   => array( 10 )
	),
    
);

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