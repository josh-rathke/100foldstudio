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

// Retrieve 100 Fold Studio Options
global $_100foldstudio_options;

$tw_consumer_key = $_100foldstudio_options['twitter_consumer_key'];
$tw_consumer_secret = $_100foldstudio_options['twitter_consumer_secret'];
$tw_access_token = $_100foldstudio_options['twitter_access_token'];
$tw_access_token_secret = $_100foldstudio_options['twitter_access_token_secret'];


?>

</section>

<?php 

/** Add Twitter OAuth PHP Plugin **/
require_once "library/twitteroauth/autoload.php";
use Abraham\TwitterOAuth\TwitterOAuth;

$connection = new TwitterOAuth($tw_consumer_key, $tw_consumer_secret, $tw_access_token, $tw_access_token_secret);
$tweets = $connection->get("statuses/user_timeline", array("count" => 3, "exclude_replies" => true)); ?>


<footer class="footer">
    <div class="row">
	   <?php do_action( '_100foldstudio_before_footer' ); ?>
	   
        <div class="columns medium-4">
            <h5>Twitter<div class="follow-button"><a href="https://twitter.com/100foldstudio">Follow</a></div></h5>
            
            <?php
            foreach($tweets as $tweet) { ?>
                <div class="tweet">
                    <?php echo $tweet->text; ?>
                </div>
            <?php }
            
            ?>
            
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
    
    <div class="footer-sub-menu">
        <?php _100foldstudio_copyright_bar(); ?>
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