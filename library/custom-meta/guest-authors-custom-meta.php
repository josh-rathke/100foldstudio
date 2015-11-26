<?php
/**
 *  Guest Author Custom Meta
 *  This file determines what custom meta is displayed
 *  and usable for the project custom post type.
 */

$meta_boxes[] = array(
	'title'  => __( 'Additional Project Information', '100foldstudio' ),
    'post_types' => array( 'guest-author' ),
    'context'    => 'side',
    'priority'   => 'high',
    'autosave'   => true,
	'fields' => array(
		
        array(
				'name'    => __( 'Radio', '100foldstudio' ),
				'id'      => "{$prefix}guest_author_status",
				'type'    => 'radio',
				'options' => array(
					'founder'      => __( 'Founder', '100foldstudio' ),
					'board-member' => __( 'Board Member', '100foldstudio' ),
                    // Staff, Intern,
				),
			),
	),
); ?>