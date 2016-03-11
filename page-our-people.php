<?php

/**
 *  Template Name: Our People
 *  This page template is for the "our people" page of the 100 fold studio
 *  website.
 */

get_header(); ?>

<?php the_post_thumbnail('header-image', array( 'class' => 'page-header-image' )); ?>

<div class="row our-people-container">

    <div class="medium-12">
        <?php while ( have_posts() ) : the_post(); ?>
            <h1><?php the_title(); ?></h1>
            <?php the_content(); ?>
        <?php endwhile; ?>
    </div>
    
    
    <ul id="og-grid" class="og-grid">
        
        <?php // Retrieve All Guest Authors
        $guest_authors = get_posts('post_type=guest-author&numberposts=-1');
        
        foreach ($guest_authors as $guest_author) :
            // Build Co-Author Object
            $coauthor_object = get_coauthors($guest_author->ID);
            
            // Build Variables for Author Profile
            $display_name = $guest_author->post_title;
            $author_bio = $coauthor_object[0]->description;
            $full_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($guest_author->ID), 'full' )[0];
            $thumb_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($guest_author->ID), 'medium' )[0];
        
            echo "<li><a href='#_' data-largesrc='{$full_image_url}' data-title='{$display_name}' data-description='{$author_bio}'><img src='{$thumb_image_url}' /></a></li>";
        endforeach;
        ?>
    </ul>
        
    <script src="<?php echo get_bloginfo('template_directory'); ?>/js/our-people-grid.js"></script>
    <script>
			$(function() {
				Grid.init();
			});
		</script>
    
</div>


<?php get_footer(); ?>