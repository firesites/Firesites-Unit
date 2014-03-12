<?php
/**
* The Sidebar containing the main widget areas.
*
* @package Firesites Unit
* @since Firesites Unit 1.0
*/
?>

<div id="top-sidebar" class="widget-area" role="complementary">
    <?php if ( ! dynamic_sidebar( 'sidebar-3' ) ) : ?>
		<div id="search-container" class="search-box-wrapper">
			<div class="search-box">
				<?php get_search_form(); ?>
			</div>
		</div>
		<div class="clear"></div>
	<?php endif; // end sidebar widget area ?>
</div><!-- #tertiary .widget-area -->