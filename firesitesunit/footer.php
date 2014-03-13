<?php
/**
* The template for displaying the footer.
*
* Contains the closing of the id=main div and all content after
*
* @package Firesites Unit
* @since Firesites Unit 1.0
*/
?>

	</div>
</section><!-- #main .site-main -->

<footer id="colophon" class="site-footer" role="contentinfo">
	<?php get_sidebar('footer'); ?>
    <div id="site-info" class="site-info">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<?php do_action( 'firesitesunit_credits' ); ?>
					<small>
						Copyright &copy; <?php echo date( 'Y' ); ?>
						<?php bloginfo( 'name' ); ?> -
						<?php printf( 'WordPress theme by <a href="http://firesites.co/" target="_blank">Firesites</a>' ); ?>
					</small>
				</div>
			</div>
		</div>
	</div><!-- .site-info -->
</footer><!-- #colophon .site-footer -->
</div><!-- #page .hfeed .site -->
 
<?php wp_footer(); ?>

<!-- Latest compiled and minified JavaScript -->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
</body>
</html>