<?php
/**
 * The template for displaying search forms in Shape
 *
 * @package Firesites Unit
 * @since Firesites Unit 1.0
 */
?>
    <form method="get" id="searchform" class="form-inline" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
		<div class="input-group">
			<input type="text" class="field form-control" name="s" value="<?php echo esc_attr( get_search_query() ); ?>" id="s" placeholder="<?php esc_attr_e( 'Search &hellip;', 'shape' ); ?>" />
			<span class="input-group-addon"><span class="glyphicon glyphicon-search"></span></span>
		</div>
    </form>