<?php
/**
 * Template part for top bar menu
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0
 */

?>
<div class="top-bar-container contain-to-grid show-for-medium-up">
    <nav class="top-bar" data-topbar role="navigation">
        <ul class="title-area">
            <a href="<?php echo get_bloginfo('home'); ?>">
                <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/assets/img/gray_on_white_linear.png" />
            </a>
        </ul>
        <section class="top-bar-section">
            <?php _100foldstudio_top_bar(); ?>
        </section>
    </nav>
</div>