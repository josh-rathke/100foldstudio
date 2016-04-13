<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0
 */

get_header(); ?>


<?php 
global $post;
$featured_image_url = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'header-image');

echo "<div class='featured-image-container' style='background: url({$featured_image_url[0]}) no-repeat center center;'>";

echo '</div>';
?>

<div class="row">
	<div class="medium-10 medium-centered columns" role="main">

	<?php do_action( '_100foldstudio_before_content' ); ?>

	<?php while ( have_posts() ) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<header>
				<h1 class="entry-title"><?php the_title(); ?></h1>
			</header>
			<?php do_action( '_100foldstudio_page_before_entry_content' ); ?>
			<div class="entry-content">
				<?php the_content(); ?>
			</div>
			<footer>
				<?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', '100foldstudio' ), 'after' => '</p></nav>' ) ); ?>
				<p><?php the_tags(); ?></p>
			</footer>
			<?php do_action( '_100foldstudio_page_before_comments' ); ?>
			<?php comments_template(); ?>
			<?php do_action( '_100foldstudio_page_after_comments' ); ?>
		</article>
	<?php endwhile;?>

	<?php do_action( '_100foldstudio_after_content' ); ?>

	</div>
</div>
<?php get_footer(); ?>
