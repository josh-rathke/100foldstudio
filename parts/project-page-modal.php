<!-- Reveal Modals begin -->

<?php $project_image = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>

<div id="<?php echo 'modal-' . $post->ID ?>" class="reveal-modal project-modal" data-reveal aria-labelledby="firstModalTitle" aria-hidden="true" role="dialog">
    
    <div style="height: 100%; overflow: scroll">
        <div class="project-modal-header" style="background: url(<?php echo $project_image; ?>) no-repeat center center"></div>
  
        <div class="row">
            <div class="columns medium-12 medium-centered">
                <h2><?php the_title(); ?></h2>
                <?php echo rwmb_meta('100foldstudio_project_location'); ?>
                
                <div class="row">
                    <div class="columns medium-6">
                        <?php the_content(); ?>
                    </div>
                    <div class="columns medium-6">
                        <img src="http://placehold.it/800x600">
                        <div class="row">
                            <div class="columns medium-6">
                                <img src="http://placehold.it/400x300">
                            </div>
                            <div class="columns medium-6">
                                <img src="http://placehold.it/400x300">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a class="close-reveal-modal" aria-label="Close">&#215;</a>

</div>