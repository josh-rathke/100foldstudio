<?php
/**
 *  Front Page Custom Meta
 *  This file determines what custom meta is displayed
 *  and usable for the front page.
 */

$meta_boxes[] = array(
	'title'  => __( "Opening Statement", '100foldstudio' ),
    'post_types' => array( 'page' ),
    'context'    => 'normal',
    'priority'   => 'high',
    'autosave'   => true,
	'fields' => array(
		
        array(
			'name' => __( 'Opening Statement Title', '100foldstudio' ),
			'id'   => "{$prefix}opening_statement_title",
			'type' => 'text',
            'desc' => "Enter the opening statement title here.",
		),
        
        array(
			'name' => __( 'Opening Statement Title', '100foldstudio' ),
			'id'   => "{$prefix}opening_statement",
			'type' => 'wysiwyg',
            'desc' => "Enter the opening statement here.",
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
            'after' => '	<hr style="margin: 30px -12px;
                            border-top: 1px solid #CCC;
                            border-bottom: 1px solid #FFF;
                            background-color: transparent;">',
		),
        
        array(
            'name'        => __( 'Page to Display for Section 1' ),
            'id'          => "{$prefix}wn_section_1_page",
            'type'        => 'post',
            'post_type'   => 'page',
            'field_type'  => 'select_advanced',
            'placeholder' => __( '-- Select an Item --' ),
            'query_args'  => array(
                'post_status'    => 'publish',
                'posts_per_page' => - 1,
            ),
            'desc'        => "Setting the option will override all of the settings below with the page's settings."
        ),
        
        array(
            'name'             => __( 'Section 1 Header Image', '100foldstudio' ),
            'id'               => "{$prefix}wn_section_1_header_img",
            'type'             => 'image_advanced',
            'max_file_uploads' => 1,
        ),
        
        array(
			'name' => __( 'Section 1 Title', '100foldstudio' ),
			'id'   => "{$prefix}wn_section_1_title",
			'type' => 'text',
            'desc' => "Enter the title for section 1.",
		),
        
        array(
			'name' => __( 'Section 1 Description', '100foldstudio' ),
			'id'   => "{$prefix}wn_section_1_description",
			'type' => 'textarea',
            'desc' => "Enter the description for section 1.",
		),
        
        array(
			'name' => __( 'Section 1 Link Text', '100foldstudio' ),
			'id'   => "{$prefix}wn_section_1_link_text",
			'type' => 'text',
            'desc' => "Enter the link text for section 1.",
		),
        
        array(
			'name' => __( 'Section 1 Link URL', '100foldstudio' ),
			'id'   => "{$prefix}wn_section_1_url",
			'type' => 'text',
            'desc' => "Enter the link url for section 1.",
            'after' => '	<hr style="margin: 30px -12px;
                            border-top: 1px solid #CCC;
                            border-bottom: 1px solid #FFF;
                            background-color: transparent;">',
		),
        
        array(
            'name'        => __( 'Page to Display for Section 2' ),
            'id'          => "{$prefix}wn_section_2_page",
            'type'        => 'post',
            'post_type'   => 'page',
            'field_type'  => 'select_advanced',
            'placeholder' => __( '-- Select an Item --' ),
            'query_args'  => array(
                'post_status'    => 'publish',
                'posts_per_page' => - 1,
            ),
            'desc'        => "Setting the option will override all of the settings below with the page's settings."
        ),
        
        array(
            'name'             => __( 'Section 2 Header Image', '100foldstudio' ),
            'id'               => "{$prefix}wn_section_2_header_img",
            'type'             => 'image_advanced',
            'max_file_uploads' => 1,
        ),
        
        array(
			'name' => __( 'Section 2 Title', '100foldstudio' ),
			'id'   => "{$prefix}wn_section_2_title",
			'type' => 'text',
            'desc' => "Enter the title for section 2.",
		),
        
        array(
			'name' => __( 'Section 2 Description', '100foldstudio' ),
			'id'   => "{$prefix}wn_section_2_description",
			'type' => 'textarea',
            'desc' => "Enter the description for section 2.",
		),
        
        array(
			'name' => __( 'Section 2 Link Text', '100foldstudio' ),
			'id'   => "{$prefix}wn_section_2_link_text",
			'type' => 'text',
            'desc' => "Enter the link text for section 2.",
		),
        
        array(
			'name' => __( 'Section 2 Link URL', '100foldstudio' ),
			'id'   => "{$prefix}wn_section_2_url",
			'type' => 'text',
            'desc' => "Enter the link url for section 1.",
            'after' => '	<hr style="margin: 30px -12px;
                            border-top: 1px solid #CCC;
                            border-bottom: 1px solid #FFF;
                            background-color: transparent;">',
		),
        
        array(
            'name'        => __( 'Page to Display for Section 3' ),
            'id'          => "{$prefix}wn_section_3_page",
            'type'        => 'post',
            'post_type'   => 'page',
            'field_type'  => 'select_advanced',
            'placeholder' => __( '-- Select an Item --' ),
            'query_args'  => array(
                'post_status'    => 'publish',
                'posts_per_page' => - 1,
            ),
            'desc'        => "Setting the option will override all of the settings below with the page's settings."
        ),
        
        array(
            'name'             => __( 'Section 3 Header Image', '100foldstudio' ),
            'id'               => "{$prefix}wn_section_3_header_img",
            'type'             => 'image_advanced',
            'max_file_uploads' => 1,
        ),
        
        array(
			'name' => __( 'Section 3 Title', '100foldstudio' ),
			'id'   => "{$prefix}wn_section_3_title",
			'type' => 'text',
            'desc' => "Enter the title for section 3.",
		),
        
        array(
			'name' => __( 'Section 3 Description', '100foldstudio' ),
			'id'   => "{$prefix}wn_section_3_description",
			'type' => 'textarea',
            'desc' => "Enter the description for section 3.",
		),
        
        array(
			'name' => __( 'Section 3 Link Text', '100foldstudio' ),
			'id'   => "{$prefix}wn_section_3_link_text",
			'type' => 'text',
            'desc' => "Enter the link text for section 3.",
		),
        
        array(
			'name' => __( 'Section 3 Link URL', '100foldstudio' ),
			'id'   => "{$prefix}wn_section_3_url",
			'type' => 'text',
            'desc' => "Enter the link url for section 1.",
            'after' => '	<hr style="margin: 30px -12px;
                            border-top: 1px solid #CCC;
                            border-bottom: 1px solid #FFF;
                            background-color: transparent;">',
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