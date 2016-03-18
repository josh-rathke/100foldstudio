<!-- Reveal Modals begin -->

<?php $project_image = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>

<div id="<?php echo 'modal-' . $post->ID ?>" class="reveal-modal project-modal single-project" data-reveal aria-labelledby="firstModalTitle" aria-hidden="true" role="dialog">
    
    <div style="height: 100%; overflow: scroll">
        <div class="project-modal-header" style="background: url(<?php echo $project_image; ?>) no-repeat center center"></div>
  
        <div class="row">
            <div class="columns medium-12 medium-centered">
                <h4><?php the_title(); ?></h4>
                <h4 class="project-location"><?php echo rwmb_meta('100foldstudio_project_location'); ?></h4>
                
                <div class="project-info-container">
                    <div class="project-info row">
                        <div class="columns medium-2"><h4>Partner:</h4></div>
                        <div class="columns medium-10"><span><?php echo rwmb_meta('100foldstudio_project_partner'); ?></span></div>
                    </div>

                    <div class="project-info row">
                        <div class="columns medium-2"><h4>Impact:</h4></div>
                        <div class="columns medium-10"><span><?php echo rwmb_meta('100foldstudio_project_impact'); ?></span></div>
                    </div>

                    <div class="project-info row">
                        <div class="columns medium-2"><h4>Statis:</h4></div>
                        <div class="columns medium-10"><span><?php echo rwmb_meta('100foldstudio_project_status'); ?></span></div>
                    </div>
                </div>
                
                <?php the_content(); ?>
                
                <div class="find-out-more">
                    <h6>Find Out More:</h6>
                    <?php echo rwmb_meta('100foldstudio_project_find_out_more'); ?>
                </div>
                   
            </div>
        </div>
        
        <div class="more-projects-container">
            <div class="row">
                <div class="columns medium-12">
                    
                    <ul class="medium-block-grid-4">
                        
                        <?php
                        $project_classification = get_the_terms( $post, 'project_classification');
                        $project_classification_slug = $project_classification[0]->slug;
                        $more_projects = new WP_Query( "post_type=project&project_classification={$project_classification_slug}&posts_per_page=4" );

                        // The Loop
                        if ( $more_projects->have_posts() ) {
                            
                            // Display Title With Related Project Classification
                            echo "<div class='columns medium-12'>";
                            echo "<h6>Other {$project_classification[0]->name} Projects</h6>";
                            echo "</div>";
                            
                            while ( $more_projects->have_posts() ) {
                                $more_projects->the_post();
                                
                                    echo '<li>';
                                        the_post_thumbnail( 'header_thumbnail' );
                                        echo '<h4>' . get_the_title() . '</h4>';
                                        echo Locale::getDisplayRegion('-' . rwmb_meta('100foldstudio_project_country_code'), 'en');
                                        
                                    echo '</li>';
                            }
                        } else {
                            // No Projects Within The Same Country Found
                        }
                        wp_reset_postdata(); ?>
                        
                    </ul>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="columns medium-12 project-donate-section">
                <p>Support 100 Fold Studio by making a donation using our secure online site:</p>
                <a href="#_" class="button inverted" style="width: 60%;">Donate</a>
            </div>
        </div>
    </div>
    <a class="close-reveal-modal" aria-label="Close">&#215;</a>

</div>