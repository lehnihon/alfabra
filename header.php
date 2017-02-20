<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package site
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="shortcut icon" type="image/jpeg" href="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/fav.jpg"; ?>" />
<?php wp_head(); ?>
<script>
new WOW().init();
</script>
</head>

<body <?php body_class(); ?>>
<div id="page">
	<nav id="principal">
		<div class="container">
			<div class="row">
				<div class="col-sm-3 text-left wow fadeIn">
					<a id="crossfade" href="<?php echo home_url( '/' ); ?>">
						<img alt="logo" class="bottom" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/logob.png"; ?>" />
						<img alt="logo" class="top" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/logo.png"; ?>" />
					</a>
				</div>
				<div class="col-sm-9 wow fadeIn">
					<?php get_search_form(); ?>
				</div>
			</div>
		</div>
	</nav>
	<nav id="secundario">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 wow fadeIn">
					<div class="menu-responsivo">
						<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<span class="glyphicon glyphicon-align-justify" aria-hidden="true"></span>
						</button>
						<ul class="dropdown-menu">
						<li><a href="<?php echo home_url( '/' ); ?>">inicio</a></li
						><li><a href="<?php echo home_url( '/' ); ?>">a empresa</a></li
						><li><a href="<?php echo home_url( '/' ); ?>">elevadores</a></li
						><li><a href="<?php echo home_url( '/' ); ?>">pós venda</a></li
						><li><a href="<?php echo home_url( '/' ); ?>">leis e normas</a></li
						><li><a href="<?php echo home_url( '/' ); ?>">fale conosco</a></li>
						</ul>
					</div>
					<div class="menu-header clearfix">
						<a href="#">fale conosco</a>
						<a href="#">leis e normas</a>
						<a href="#">pós venda</a>
						<a href="#">elevadores</a>
						<a href="#">a empresa</a>
						<a href="#">início</a>
					</div>
				</div>
			</div>
		</div>
	</nav>
