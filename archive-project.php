<?php 

get_header(); 

// Retrieve all of the 100 fold studio options from the Redux Framework.
global $_100foldstudio_options;
?>


<script type="text/javascript" src="https://maps.google.com/maps/api/js"></script>
<script type="text/javascript" src="<?php echo get_bloginfo( 'template_directory' ); ?>/js/infobox.js"></script>

<?php

// Register the script
wp_register_script( 'projects-map', get_bloginfo( 'template_directory' ) . '/js/projects-map.js' );

// Initialize the $map_project_data array
$map_project_data = array();

$projects = get_posts('post_type=project&posts_per_page=-1');
foreach ($projects as $project) {
    echo $project->ID . ', ';
    $country = rwmb_meta('100foldstudio_project_country_code', '', $project->ID);
    
    if (!array_key_exists($country, $map_project_data)) {
        $map_project_data[$country] = array (
            'project_count' => 1,
            'projects' => array(
                $project->ID => array (
                    'project_title'     => $project->post_title,
                    'project_permalink' => get_permalink($project->ID),
                )                
            ),
        );
    } else {
        $map_project_data[$country]['project_count']++;
        $map_project_data[$country]['projects'][$project->ID] = array (
            'project_title'     => $project->post_title,
            'project_permalink' => get_permalink($project->ID),
        ); 
    }
}

wp_localize_script( 'projects-map', 'map_project_data', $map_project_data );

// Enqueued script with localized data.
wp_enqueue_script( 'projects-map' ); ?>


<div id="projects-map"></div>

<div class="row">
    <div class="columns medium-12">
        <h1>Our Work</h1>
        <p class="our-work-description"><?php echo $_100foldstudio_options['our_work_description'] ?></p>
        
        <?php
        // List All Projects Ordered By User Preference
        $ordered_project_classifications = $_100foldstudio_options['project_classification_order'];
        foreach ($ordered_project_classifications as $key => $project_classification) {
            
            // Populate Term Variable With Current Term Information
            $term = get_term($project_classification, 'project_classification');
            
            // Display Section Title
            echo '<h5>' . $term->name . '</h5>';
            
            // Open A Block Grid Element
            echo '<ul class="medium-block-grid-3 project-class-container">';

            // The Query
            $the_query = new WP_Query( "project_classification={$term->name}" );

            // The Loop
            if ( $the_query->have_posts() ) { 
                while ( $the_query->have_posts() ) {
                    $the_query->the_post(); ?>
                    <li>
                        <a href="#" class="reveal-modal-link" data-reveal-id="<?php echo 'modal-' . $post->ID ?>">
                        <div class="project-content-container">
                            
                            <div class="hover-placeholder" style="background: url(<?php echo wp_get_attachment_image_src(get_post_thumbnail_id( $post->ID ), 'large' )[0]; ?>) no-repeat center center;"></div>
                            <h6><?php the_title(); ?></h6>
                            <div class="project-location"><?php echo rwmb_meta('100foldstudio_project_location'); ?></div>
                            <div class="ajax-load-bar"></div>
                            <p><?php echo rwmb_meta( '100foldstudio_project_catch_phrase' ); ?></p>
                            <?php echo get_the_post_thumbnail($post->ID, 'post-thumbnail', 'class=project-preview' ); ?>
                    
                            
                        </div>
                        </a>
                    </li>
                    <?php include('parts/project-page-modal.php'); ?>
                <?php
                }
            } else {
                echo 'Sorry but no projects were found.';
            }
            /* Restore original Post Data */
            wp_reset_postdata();
            
            // Close the block grid
            echo '</ul>';
        }
        
        ?>
    </div>
</div>





<?php get_footer(); ?>