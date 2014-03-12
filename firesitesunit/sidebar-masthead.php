<?php
/**
* The Sidebar containing the main widget areas.
*
* @package Firesites Unit
* @since Firesites Unit 1.0
*/
?>

<?php if ( is_active_sidebar( 'sidebar-4' ) && is_front_page() ) : ?>
	<div id="site-masthead">
		<div id="masthead-main" class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="flexslider">
						<ul class="slides">
							<?php dynamic_sidebar( 'sidebar-4' ); ?>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php endif; // end sidebar widget area ?>