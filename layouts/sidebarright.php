<?php
/**
Template Name: Sidebar Right, No Secondary
 */
 
get_header(); ?>

<div class="row">
	<div class="col-md-8"> 
        <div id="primary" class="content-area">
            <div id="content" class="site-content" role="main">
 
                <?php while ( have_posts() ) : the_post(); ?>
 
                    <?php get_template_part( 'content', 'page' ); ?>
 
                    <?php comments_template( '', true ); ?>
 
                <?php endwhile; // end of the loop. ?>
 
            </div><!-- #content .site-content -->
        </div><!-- #primary .content-area -->
	</div>
	<div class="col-md-4">
		<?php get_sidebar('primary'); ?>
	</div>
</div>

<?php get_footer(); ?>