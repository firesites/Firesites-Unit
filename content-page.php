<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Firesites Unit
 * @since Firesites Unit 1.0
 */
?>
 
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if ( !is_front_page() ) { ?>
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
	</header><!-- .entry-header -->
	<?php } ?>
 
    <div class="entry-content">
        <?php the_content(); ?>
        <?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'firesitesunit' ), 'after' => '</div>' ) ); ?>
        <?php edit_post_link( __( 'Edit', 'firesitesunit' ), '<span class="edit-link">', '</span>' ); ?>
    </div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->