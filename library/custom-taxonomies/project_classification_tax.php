<?php
add_action( 'init', 'project_classification_tax' );

function project_classification_tax() {
    // Add new taxonomy, make it hierarchical (like categories)
    $labels = array(
        'name'              => _x( 'Project Classification', 'taxonomy general name' ),
        'singular_name'     => _x( 'Project Classification', 'taxonomy singular name' ),
        'search_items'      => __( 'Search Project Classifications' ),
        'all_items'         => __( 'All Project Classifications' ),
        'parent_item'       => __( 'Parent Project Classification' ),
        'parent_item_colon' => __( 'Parent Project Classification:' ),
        'edit_item'         => __( 'Edit Project Classification' ),
        'update_item'       => __( 'Update Project Classification' ),
        'add_new_item'      => __( 'Add New Project Classification' ),
        'new_item_name'     => __( 'New Project Classification Name' ),
        'menu_name'         => __( 'Project Classification' ),
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'project-classifications' ),
    );

    register_taxonomy( 'project_classification', array( 'project' ), $args );
}


?>