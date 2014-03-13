<?php
/**
* The Sidebar containing the main widget areas.
*
* @package Firesites Unit
* @since Firesites Unit 1.0
*/
?>

<?php if ( is_active_sidebar( 'sidebar-5' ) ) : ?>
	<div id="site-links" class="site-links">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<?php dynamic_sidebar( 'sidebar-5' ); ?>
				</div>
				<div class="col-md-3">
					<?php dynamic_sidebar( 'sidebar-6' ); ?>
				</div>
				<div class="col-md-3">
					<?php dynamic_sidebar( 'sidebar-7' ); ?>
				</div>
				<div class="col-md-3">
					<?php dynamic_sidebar( 'sidebar-8' ); ?>
				</div>
			</div>
		</div>
	</div>
<?php endif; // end sidebar widget area ?>