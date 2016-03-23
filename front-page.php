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
        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>
    </div>
    
    <div class="columns medium-12 whats-new-container">
        <h2><?php echo rwmb_meta( '100foldstudio_wn_section_title' ); ?></h2>
        <?php if ( is_active_sidebar( 'home-page-middle' ) ) : ?>
            <div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
                <?php dynamic_sidebar( 'home-page-middle' ); ?>
            </div><!-- #primary-sidebar -->
        <?php endif; ?>
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