<?php

/**
 *  Front Page
 *  This is the front page of the website.
 *  Whatever is used in this page will be displayed on
 *  the front or first page of the website.
 *
 *  Template Name: Front Page
 */ 

get_header(); ?>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


<div class="row front-page">

    <div class="columns medium-12 opening-statement" id="about">
        <h1><?php echo rwmb_meta('100foldstudio_opening_statement_title'); ?></h1>
        <?php echo rwmb_meta('100foldstudio_opening_statement'); ?>
    </div>
    
    <div class="columns medium-12 whats-new-container">
        <h2><?php echo rwmb_meta( '100foldstudio_wn_section_title' ); ?></h2>
        
        <ul class="medium-block-grid-3">
            <?php
            
            // Get Page ID
            for ($wn_counter=1; $wn_counter<=3; $wn_counter++) {
            $page_id = rwmb_meta("100foldstudio_wn_section_{$wn_counter}_page");
                
                echo '<li>';
                
                //Section Header Image Check
                if (isset($page_id)) {
                    if (rwmb_meta("100foldstudio_wn_section_{$wn_counter}_header_img")) {
                        
                        // Define Image ID
                        $img_id = rwmb_meta("100foldstudio_wn_section_{$wn_counter}_header_img");
                        echo wp_get_attachment_image($img_id, 'header-thumbnail');
                    } else {
                        echo get_the_post_thumbnail($page_id, 'header-thumbnail');
                    }
                } else {
                    // Define Image ID
                    $img_id = rwmb_meta("100foldstudio_wn_section_{$wn_counter}_header_img");
                    echo wp_get_attachment_image($img_id, 'header-thumbnail');
                }
                
                //Section Title Check
                if (isset($page_id)) {
                    if (rwmb_meta("100foldstudio_wn_section_{$wn_counter}_title")) {
                        echo '<h4>' . rwmb_meta("100foldstudio_wn_section_{$wn_counter}_title") . '</h4>';
                    } else {
                        echo '<h4>' . get_the_title($page_id) . '</h4>';
                    }
                } else {
                    echo '<h4>' . rwmb_meta("100foldstudio_wn_section_{$wn_counter}_title") . '</h4>';
                }
                
                //Section Description Check
                if (isset($page_id)) {
                    if (rwmb_meta("100foldstudio_wn_section_{$wn_counter}_description")) {
                        echo rwmb_meta("100foldstudio_wn_section_{$wn_counter}_description");
                    } else {
                        echo get_excerpt_by_id($page_id);
                    }
                } else {
                    echo rwmb_meta("100foldstudio_wn_section_{$wn_counter}_description");
                }
                
                //Section Link Check
                if (isset($page_id)) {
                    if (rwmb_meta("100foldstudio_wn_section_{$wn_counter}_link_text")) {
                        $link_text = rwmb_meta("100foldstudio_wn_section_{$wn_counter}_link_text");
                        $link_url = get_permalink($page_id);
                        echo '<a href= "' . $link_url . '" class="button button-alt inverted">' . $link_text . '</a>';
                    } else {
                        $link_url = get_permalink($page_id);
                        echo '<a href= "' . $link_url . '" class="button button-alt inverted">Learn More</a>';
                    }
                } else {
                    $link_text = rwmb_meta("100foldstudio_wn_section_{$wn_counter}_link_text");
                    $link_url = rwmb_meta("100foldstudio_wn_section_{$wn_counter}_link_text");
                    echo '<a href= "' . $link_url . '" class="button button-alt inverted">' . $link_text . '</a>';
                }
                
                echo '</li>';
            }
            ?>
            </li>
        </ul>
    </div>
    
    <div class="columns medium-12 front-page-content">
        <?php the_content(); ?>
    </div>

</div>

<?php // Get Parallax Background Image
    $background_image_url = wp_get_attachment_url(rwmb_meta('100foldstudio_parallax_background_image'));
?>

<div class="full-width-parralax" data-parallax="scroll" data-image-src="<?php echo $background_image_url; ?>">
    <div class="row vertical-align-relative"><div class="columns small-12">
        <h2 class="parralax-heading"><?php echo rwmb_meta( '100foldstudio_parralax_phrase' ); ?></h2>
    </div></div>
</div>

<div class="row project-description">
    <div class="columns medium-8">
        <h2><?php echo rwmb_meta( '100foldstudio_op_section_title' ); ?></h2>
        <p><?php echo rwmb_meta( '100foldstudio_op_section_description' ); ?></p>
    </div>
    
    <div class="columns medium-4" style="margin-top: 80px;">
        <a href="<?php echo rwmb_meta( '100foldstudio_op_section_tl_url' ); ?>" class="button full-width-button"><?php echo rwmb_meta( '100foldstudio_op_section_tl_text' ); ?></a>
        <a href="<?php echo rwmb_meta( '100foldstudio_op_section_bl_url' ); ?>" class="button inverted full-width-button"><?php echo rwmb_meta( '100foldstudio_op_section_bl_text' ); ?></a>
    </div>
</div>
    
<div class="row">    
    <div class="columns medium-12">
        <blockquote class="full-width">"And those are the ones on whom seed was sown on the good soil; and they hear the
word and accept it and bear fruit, thirty, sixty, and a hundredfold." Mark 4:20</blockquote>
    </div>
</div>



<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<?php get_footer(); ?>