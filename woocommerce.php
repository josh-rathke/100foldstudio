<?php
/**
 * Basic WooCommerce support
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0
 */

get_header(); ?>

<div class="row">
	<div class="small-12 large-8 columns" role="main">

	<?php do_action( '_100foldstudio_before_content' ); ?>

	<?php while ( woocommerce_content() ) : the_post(); ?>
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
	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>