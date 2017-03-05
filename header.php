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
var templateUrl = '<?php echo get_stylesheet_directory_uri(); ?>';
</script>
</head>

<body <?php body_class(); ?>>
<div id="page">
	<nav id="principal">
		<div class="container">
			<div class="row">
				<div class="col-md-3 text-left wow fadeIn">
					<a id="crossfade" href="<?php echo home_url( '/' ); ?>">
						<img alt="logo" class="bottom" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/logob.png"; ?>" />
						<img alt="logo" class="top" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/logo.png"; ?>" />
					</a>
				</div>
				<div class="col-md-9 wow fadeIn">
					<?php get_search_form(); ?>
				</div>
			</div>
		</div>
	</nav>
	<nav id="secundario">
		<div class="container">
			<div class="row">
				<div class="col-md-12 wow fadeIn">
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
						<div class="fale-conosco-menu nav-item hero">
							<a class="nav-link fale-conosco-link" href="#">fale conosco</a>
							<div class="fale-conosco-drop">
								<div><a href="#">quero um orçamento de produtos Alfabra</a></div>
								<div><a href="#">quero um orçamento de manutenção e serviços</a></div>
								<div><a href="#">abertura de chamados - somente pra clientes Alfabra</a></div>
								<div><a href="#">seja um forncedor Alfabra</a></div>
								<div><a href="#">trabalhe conosco</a></div>
								<div><a href="#">sac</a></div>
							</div>
						</div>
						<div class="nav-item"><a class="nav-link" href="#">leis e normas</a></div>
						<div class="nav-item"><a class="nav-link" href="#">pós venda</a></div>
						<div class="nav-item"><a class="nav-link" href="#">elevadores</a></div>
						<div class="nav-item"><a class="nav-link" href="#">a empresa</a></div>
						<div class="nav-item"><a class="nav-link" href="#">início</a></div>
					</div>
				</div>
			</div>
		</div>
	</nav>
