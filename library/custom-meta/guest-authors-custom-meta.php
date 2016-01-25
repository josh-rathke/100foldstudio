<?php
/**
 *  Guest Author Custom Meta
 *  This file determines what custom meta is displayed
 *  and usable for the project custom post type.
 */

$meta_boxes[] = array(
	'title'  => __( '100 Fold Studio Information', '100foldstudio' ),
    'post_types' => array( 'guest-author' ),
    'context'    => 'side',
    'priority'   => 'high',
    'autosave'   => true,
	'fields' => array(
		
        array(
				'name'    => __( 'Position & Title', '100foldstudio' ),
				'id'      => "{$prefix}guest_author_status",
				'type'    => 'text',
			),
        array(
				'name'    => __( 'Hometown', '100foldstudio' ),
				'id'      => "{$prefix}guest_author_status",
				'type'    => 'text',
			),
        array(
				'name'    => __( 'Education', '100foldstudio' ),
				'id'      => "{$prefix}guest_author_status",
				'type'    => 'text',
			),
        array(
				'name'    => __( 'Registrations', '100foldstudio' ),
				'id'      => "{$prefix}guest_author_status",
				'type'    => 'text',
			),
        array(
				'name'    => __( 'Certifications', '100foldstudio' ),
				'id'      => "{$prefix}guest_author_status",
				'type'    => 'text',
			),
        array(
				'name'    => __( 'Associations', '100foldstudio' ),
				'id'      => "{$prefix}guest_author_status",
				'type'    => 'text',
			),
        
	),
); ?>