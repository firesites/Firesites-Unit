<?php
/**
Template Name: Full Width, No Sidebar
 */
 
get_header(); ?>

<div class="row">
	<div class="col-md-12"> 
        <div id="primary" class="content-area">
            <div id="content" class="site-content" role="main">
 
                <?php while ( have_posts() ) : the_post(); ?>
 
                    <?php get_template_part( 'content', 'page' ); ?>
 
                    <?php comments_template( '', true ); ?>
 
                <?php endwhile; // end of the loop. ?>
 
            </div><!-- #content .site-content -->
        </div><!-- #primary .content-area -->
	</div>
</div>

<?php get_footer(); ?>