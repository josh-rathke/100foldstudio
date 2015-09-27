<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0
 */

?>

</section>
<footer class="footer">
    <div class="row">
	   <?php do_action( '_100foldstudio_before_footer' ); ?>
	   
        <div class="columns medium-4">
            Latest News
        </div>
        <div class="columns medium-4">
            Connect
        </div>
        <div class="columns medium-4">
            Join Us
        </div>
        
	   <?php do_action( '_100foldstudio_after_footer' ); ?>
    </div>
</footer>
<a class="exit-off-canvas"></a>

	<?php do_action( '_100foldstudio_layout_end' ); ?>
	</div>
</div>
<?php wp_footer(); ?>
<?php do_action( '_100foldstudio_before_closing_body' ); ?>
</body>
</html>