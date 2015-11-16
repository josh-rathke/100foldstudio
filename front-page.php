<?php

/**
 *  Front Page
 *  This is the front page of the website.
 *  Whatever is used in this page will be displayed on
 *  the front or first page of the website.
 */ 

get_header(); ?>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


<div class="row front-page">

    <div class="columns medium-12 opening-statement">
        <h2>Creating Places of Change</h2>
        <p>OPENING STATEMENT That describes what we do. Vestibulum ante ipsum primis in
faucibus orci luctus et ultrices posuere cubilia Curae; Sed ultricies laoreet nunc, vitae
porta turpis. Nullam felis sem, tincidunt in fringilla a, vulputate nec felis. Sed feugiat at
risus eu tincidunt. Curabitur nec fermentum magna. In auctor metus mi, ac ultrices
massa lobortis fermentum. Donec id dui id metus dapibus malesuada</p>
    </div>
    
    <div class="columns medium-12 whats-new-container">
        <h2>What's New</h2>
        <ul class="medium-block-grid-3">
            <li>
                <img src="http://placehold.it/350x150" />
                <div class="whats-next-content">
                    <h6>Story Title</h6>
                    <p>dolor sit amet, ut pri falli dicit, mei solum
admodum reprehendunt eu.</p>
                    <a href="_#" class="button-alt">Read Full Story</a>
                </div>
            </li>
            <li>
                <img src="http://placehold.it/350x150" />
                <div class="whats-next-content">
                    <h6>Story Title</h6>
                    <p>dolor sit amet, ut pri falli dicit, mei solum
admodum reprehendunt eu.</p>
                    <a href="_#" class="button-alt">Read Full Story</a>
                </div>
            </li>
            <li>
                <img src="http://placehold.it/350x150" />
                <div class="whats-next-content">
                    <h6>Story Title</h6>
                    <p>dolor sit amet, ut pri falli dicit, mei solum
admodum reprehendunt eu.</p>
                    <a href="_#" class="button-alt">Read Full Story</a>
                </div>
            </li>
        </ul>
    </div>
</div>
    
<div class="full-width-parralax" data-parallax="scroll" data-image-src="<?php echo get_bloginfo('template_directory'); ?>/assets/img/playing.jpg">
    <h2 class="parralax-heading vertical-align-relative">Creating Places of Change</h2>
</div>

<div class="row donate-now">
    <div class="columns medium-8">
        <h2>Our Projects</h2>
        <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed
ultricies laoreet nunc, vitae porta turpis. Nullam felis sem, tincidunt in fringilla a, vulputate nec felis.</p>
    </div>
    <div class="columns medium-4">
        <a href="#_" class="button full-width-button">Donate</a>
    </div>
    
    
    <div class="columns medium-12">
        <blockquote class="full-width">"And those are the ones on whom seed was sown on the good soil; and they hear the
word and accept it and bear fruit, thirty, sixty, and a hundredfold." Mark 4:20</blockquote>
    </div>
</div>



<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<?php get_footer(); ?>