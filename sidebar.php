<?php
/**
* The Sidebar containing the main widget areas.
*
* @package Firesites Unit
* @since Firesites Unit 1.0
*/
?>
<div id="secondary" class="widget-area" role="complementary">
    <?php do_action( 'before_sidebar' ); ?>
    <?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>
 
        <aside id="archives" class="widget">
            <h3 class="widget-title"><?php _e( 'Archives', 'firesitesunit' ); ?></h3>
            <ul>
                <?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
            </ul>
        </aside>
 
        <aside id="meta" class="widget">
            <h3 class="widget-title"><?php _e( 'Meta', 'firesitesunit' ); ?></h3>
            <ul>
                <?php wp_register(); ?>
                <li><?php wp_loginout(); ?></li>
                <?php wp_meta(); ?>
            </ul>
        </aside>
 
    <?php endif; // end sidebar widget area ?>
</div><!-- #secondary .widget-area -->

<?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
	<div id="tertiary" class="widget-area" role="complementary">
		 <?php dynamic_sidebar( 'sidebar-2' ); ?>
	</div><!-- #tertiary .widget-area -->
<?php endif; // end sidebar widget area ?>