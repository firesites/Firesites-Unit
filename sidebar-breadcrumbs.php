<?php
/**
* The Sidebar containing the main widget areas.
*
* @package Firesites Unit
* @since Firesites Unit 1.0
*/
?>

<?php if ( is_active_sidebar( 'sidebar-9' ) && !is_front_page() ) : ?>
	<div id="site-breadcrumbs">
		<div id="breadcrumbs-main" class="container">
			<div class="row">
				<div class="col-md-12">
					<?php dynamic_sidebar( 'sidebar-9' ); ?>
				</div>
			</div>
		</div>
	</div>
<?php endif; // end sidebar widget area ?>