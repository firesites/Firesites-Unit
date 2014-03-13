<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title><?php
	/*
	* Print the <title> tag based on what is being viewed.
	*/
	global $page, $paged;
	 
	wp_title( '|', true, 'right' );
	 
	// Add the blog name.
	bloginfo( 'name' );
	 
	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
	echo " | $site_description";
	 
	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
	echo ' | ' . sprintf( __( 'Page %s', 'firesitesunit' ), max( $paged, $page ) );
	 
	?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
	<!-- Optional theme -->
	<!-- <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap-theme.min.css"> -->
	<?php wp_head(); ?>
	<?php if(is_front_page()){ ?>
		<script>
			jQuery(function(){
				jQuery('.flexslider').flexslider({
					//Slider options
				});
			});
		</script>
	<?php } ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<header id="site-header" class="site-header" role="banner">
		<div class="header-main container">
			<div class="row">
				<div class="col-md-3">
					<h3 class="site-title"><a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h3>
					<h4 class="site-description"><?php bloginfo( 'description' ); ?></h4>
					<?php $header_image = get_header_image();
					if ( ! empty( $header_image ) ) { ?>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
							<img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" class="img-responsive" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" />
						</a>
					<?php } // if ( ! empty( $header_image ) ) ?>
				</div>
				
				<div id="site-top" class="col-md-9 site-top">
					<?php get_sidebar('top'); ?>
					<nav role="navigation" id="site-navigation" class="site-navigation main-navigation">
						<h3 class="assistive-text"><?php _e( 'Main Menu', 'firesitesunit' ); ?><span class="glyphicon glyphicon-th-list"></span></h3>
						<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
					</nav><!-- .site-navigation .main-navigation -->
				</div>
			</div>
		</div>
	</header>
	<?php get_sidebar('masthead'); ?><!-- #masthead -->
	<?php get_sidebar('breadcrumbs'); ?><!-- #breadcrumbs -->

	<section id="main-wrapper">
		<div id="main" class="site-main container">
