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
    
    
    <ul class="small-block-grid-2">
        <?php // Retrieve All Guest Authors
        print_r(get_post_types());
        $guest_authors = get_posts('post_type=guest-author&numberposts=-1');
        
        foreach ($guest_authors as $guest_author) { ?>
            
        <?php endforeach;

        print_r($guest_authors);
        ?>
    </ul>
</div>


<?php get_footer(); ?>