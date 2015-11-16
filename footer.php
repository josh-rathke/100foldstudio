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
            <h5>Latest News</h5>
            <a class="twitter-timeline" href="https://twitter.com/100foldstudio" data-widget-id="362302602966364161" data-chrome="transparent">Tweets by @100foldstudio</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
        </div>
        <div class="columns medium-4">
            <h5>Connect</h5>
            <?php echo do_shortcode('[gravityform id="1" title="false" description="false"]'); ?>
        </div>
        <div class="columns medium-4 join-us">
            <h5>Join Us</h5>
            <?php _100foldstudio_join_us(); ?>
        </div>
        
	   <?php do_action( '_100foldstudio_after_footer' ); ?>
    </div>
    
    <div class="footer-sub-menu" style="background: white;">
        This is some text test | test | test | test |test
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