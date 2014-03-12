<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Firesites Unit
 * @since Firesites Unit 1.0
 */
 
get_header(); ?>

<div class="row">
	<div class="col-md-8"> 
        <div id="primary" class="content-area">
            <div id="content" class="site-content" role="main">
 
            <?php while ( have_posts() ) : the_post(); ?>
 
                <?php firesitesunit_content_nav( 'nav-above' ); ?>
 
                <?php get_template_part( 'content', 'single' ); ?>
 
                <?php firesitesunit_content_nav( 'nav-below' ); ?>
 
                <?php
                    // If comments are open or we have at least one comment, load up the comment template
                    if ( comments_open() || '0' != get_comments_number() )
                        comments_template( '', true );
                ?>
 
            <?php endwhile; // end of the loop. ?>
 
            </div><!-- #content .site-content -->
        </div><!-- #primary .content-area -->
	</div>
	<div class="col-md-4">
		<?php get_sidebar(); ?>
	</div>
</div>

<?php get_footer(); ?>