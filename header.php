<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Festival of Trees
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="zuChem - products to make life sweeter. zuChem is a leading producer of unique sugars for human health and nutrition" />
<meta name="keywords" content="zuChem, zuchem, pharmaceutical, pharmaceuticals, glycochemical, glycochemicals, Carbohydrate, Carbohydrates, Reduced sugar, biotechnology, agricultural, specialty chemicals, polyol, polyols">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico"/><?php

wp_head();

?></head>
<body <?php body_class(); ?>>
<div class="zu_main_container">
	<div class="zu_container">

		<div class="zu_header">
			<div class="zu_logo"><a href="<?php bloginfo('url'); ?>/"><img border="0" src="<?php bloginfo('template_directory'); ?>/images/logo.jpg" alt="zuChem - products to make life sweeter" /></a></div>
			<div class="zu-header-menu">
				<ul class="zu_hdr_links">
					<li><a href="<?php the_field('twitter','114'); ?>" target="_blank"><img border="0" src="<?php bloginfo('template_directory'); ?>/images/logo_twitter.jpg" alt="Follow zuChem on Twitter" /></a></li>
					<li><a href="<?php the_field('facebook','114'); ?>" target="_blank"><img border="0" src="<?php bloginfo('template_directory'); ?>/images/logo_facebook.jpg" alt="Find zuChem on Facebook" /></a></li>
					<li><a href="<?php bloginfo('url'); ?>/jobs/">JOBS</a></li>
					<li>|</li>
					<li><a href="<?php bloginfo('url'); ?>/contact-us/">CONTACT US</a></li>
					<li>|</li>
					<li><a href="<?php bloginfo('url'); ?>/">HOME</a></li>
				</ul>
			</div><!-- .zu-header-menu -->
			<div class="zu_subscribe">
				<h3>SUBSCRIBE TO zuNEWS E-NEWSLETTER</h3>
				<form action="http://dccmarketing.createsend.com/t/y/s/bnqk/" method="post" id="subForm">
					<input class="zu_submit" type="submit" name="submit" value="" />
					<input class="zu_input" type="text" name="cm-bnqk-bnqk" id="bnqk-bnqk" />
				</form>
			</div>
		<br clear="all" />
		</div>

		<div class="zu_content">
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="menu" aria-expanded="false"><?php _e( 'Menu', 'zuchem' ); ?></button><?php

				if ( is_front_page() ) {

					$args['depth'] = 1;

				}

				$args['theme_location'] = 'primary';

				wp_nav_menu( $args );

		?></nav><!-- #site-navigation -->