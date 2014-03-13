<?php
/**
 * @package Firesites Unit
 * @since Firesites Unit 1.0
 */
?>
 
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'firesitesunit' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
 
        <?php if ( 'post' == get_post_type() ) : ?>
        <div class="entry-meta">
            <?php firesitesunit_posted_on(); ?>
        </div><!-- .entry-meta -->
        <?php endif; ?>
    </header><!-- .entry-header -->
 
    <?php if ( is_search() ) : // Only display Excerpts for Search ?>
    <div class="entry-summary">
        <?php the_excerpt(); ?>
    </div><!-- .entry-summary -->
    <?php else : ?>
    <div class="entry-content">
        <?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'firesitesunit' ) ); ?>
        <?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'firesitesunit' ), 'after' => '</div>' ) ); ?>
    </div><!-- .entry-content -->
    <?php endif; ?>
 
    <footer class="entry-meta">
        <?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
            <?php
                /* translators: used between list items, there is a space after the comma */
                $categories_list = get_the_category_list( __( ', ', 'firesitesunit' ) );
                if ( $categories_list && firesitesunit_categorized_blog() ) :
            ?>
            <span class="cat-links">
                <?php printf( __( 'Posted in %1$s', 'firesitesunit' ), $categories_list ); ?>
            </span>
            <?php endif; // End if categories ?>
 
            <?php
                /* translators: used between list items, there is a space after the comma */
                $tags_list = get_the_tag_list( '', __( ', ', 'firesitesunit' ) );
                if ( $tags_list ) :
            ?>
            <span class="sep"> | </span>
            <span class="tag-links">
                <?php printf( __( 'Tagged %1$s', 'firesitesunit' ), $tags_list ); ?>
            </span>
            <?php endif; // End if $tags_list ?>
        <?php endif; // End if 'post' == get_post_type() ?>
 
        <?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
        <span class="sep"> | </span>
        <span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'firesitesunit' ), __( '1 Comment', 'firesitesunit' ), __( '% Comments', 'firesitesunit' ) ); ?></span>
        <?php endif; ?>
 
        <?php edit_post_link( __( 'Edit', 'firesitesunit' ), '<span class="sep"> | </span><span class="edit-link">', '</span>' ); ?>
    </footer><!-- .entry-meta -->
</article><!-- #post-<?php the_ID(); ?> -->