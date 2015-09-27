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
        <h3>Sed ultricies laoreet nunc, vitae porta turpis.</h3>
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
    
    <div class="columns medium-12 our-approach">
        <h2>Our Approach</h2>
        <p>UNREACHED Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed
ultricies laoreet nunc, vitae porta turpis. Nullam felis sem, tincidunt in fringilla a, vulputate nec felis. Sed feugiat
at risus eu tincidunt. Curabitur nec fermentum magna. In auctor metus mi, ac ultrices massa lobortis
fermentum. Donec id dui id metus dapibus malesuada. Pellentesque at massa non sem rutrum fringilla semper
a augue</p>
        <p>NEXT GENERATION OF ARCHITECTS Vestibulum ante ipsum primis in faucibus orci luctus et ultrices
posuere cubilia Curae; Sed ultricies laoreet nunc, vitae porta turpis. Nullam felis sem, tincidunt in fringilla a,
vulputate nec felis. Sed feugiat at risus eu tincidunt. Curabitur nec fermentum magna. In auctor metus mi, ac
ultrices massa lobortis fermentum. Donec id dui id metus dapibus malesuada. Pellentesque at massa non sem
rutrum fringilla semper a augue.</p>
        <p>PROFESSIONALS Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed
ultricies laoreet nunc, vitae porta turpis. Nullam felis sem, tincidunt in fringilla a, vulputate nec felis. Sed feugiat
at risus eu tincidunt. Curabitur nec fermentum magna. In auctor metus mi, ac ultrices massa lobortis
fermentum. Donec id dui id metus dapibus malesuada. Pellentesque at massa non sem rutrum fringilla semper
a augue.</p>
    </div>
</div>
    
<div class="full-width-containter full-width-promo" style="background: url(http://placehold.it/350x150);">
    <h2>Creating Places of Change</h2>
</div>
    
    
    
</div>



<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<?php get_footer(); ?>