<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package Firesites Unit
 * @since Firesites Unit 1.0
 */
 
get_header(); ?>
 
<div class="row">
	<div class="col-md-8"> 
        <section id="primary" class="content-area">
            <div id="content" class="site-content" role="main">
 
            <?php if ( have_posts() ) : ?>
 
                <header class="page-header">
                    <h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'firesitesunit' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
                </header><!-- .page-header -->
 
                <?php firesitesunit_content_nav( 'nav-above' ); ?>
 
                <?php /* Start the Loop */ ?>
                <?php while ( have_posts() ) : the_post(); ?>
 
                    <?php get_template_part( 'content', 'search' ); ?>
 
                <?php endwhile; ?>
 
                <?php firesitesunit_content_nav( 'nav-below' ); ?>
 
            <?php else : ?>
 
                <?php get_template_part( 'no-results', 'search' ); ?>
 
            <?php endif; ?>
 
            </div><!-- #content .site-content -->
        </section><!-- #primary .content-area -->
	</div>
	<div class="col-md-4">
		<?php get_sidebar(); ?>
	</div>
</div>

<?php get_footer(); ?>