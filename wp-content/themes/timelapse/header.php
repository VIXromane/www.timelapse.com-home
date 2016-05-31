<?php
session_start();
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>

<!--<?php wp_nav_menu( array( 'theme_location' => 'top-bar-r' ) ); ?>-->

<html class="no-js" <?php language_attributes(); ?> >
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<!--FONTS-->
	<link href='https://fonts.googleapis.com/css?family=Lora:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,900italic,900,700italic,700,400italic' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/assets/components/animate.css/animate.min.css">

	<script language="JavaScript" type="text/javascript" src="https://use.fontawesome.com/0dfe417c47.js"></script>
	<script language="JavaScript" type="text/javascript" src="https://code.jquery.com/jquery-1.10.2.js"></script>
	<!-- include jQuery -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<?php if( (is_front_page() || is_home()) && (!isset($_SESSION['first'])) ) : 
	

		$_SESSION['first'] = 'ok';

	?>
<section class="adieu" id="intro">
	


	<div id="visu-intro">
		<div id="circles">
			<div id="point1" class="points"></div>
			<div id="point2" class="points"></div>
			<div id="point3" class="points"></div>
			<div id="point4" class="points"></div>

		</div>
	</div>

	<div class="intro-content text-center">
		<img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/_visuels/complete-logo-white-timelapse.png" alt="logo full verison Timelapse introduction">
		<h1>Montres intemporelles de collection</h1>
		<a class="removeme" href="#" id="action">Trouvez votre modèle<br/>
			<i class="fa fa-angle-down" aria-hidden="true"></i>
		</a>
	</div>

		<!--<img id="visuel-introduction" src="<?= _URL_IMAGES; ?>/_visuels_dyns/visuel-intro.png" alt="visuel Timelapse introduction">-->
	</section>
<?php endif; ?>



	<?php do_action( 'foundationpress_after_body' ); ?>

	<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) == 'offcanvas' ) : ?>
	<div class="off-canvas-wrapper">
		<div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
			<?php get_template_part( 'template-parts/mobile-off-canvas' ); ?>
		<?php endif; ?>

		<?php do_action( 'foundationpress_layout_start' ); ?>

		<header id="masthead" class="site-header" role="banner">
			<div class="title-bar" data-responsive-toggle="site-navigation">
				<button class="menu-icon" type="button" data-toggle="mobile-menu"></button>
				<div class="title-bar-title">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
				</div>
			</div>

			<nav id="site-navigation" class="main-navigation top-bar" role="navigation">
				<div class="top-bar-left">
					<ul class="menu">
						<li class="home"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></li>
					</ul>
				</div>
				<div class="top-bar-right">
					<?php foundationpress_top_bar_r(); ?>

					<?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) == 'topbar' ) : ?>
					<?php get_template_part( 'template-parts/mobile-top-bar' ); ?>
				<?php endif; ?>
			</div>
		</nav>
	</header>

	<?php include('custombutton.php'); ?>

	<section class="container">


		<?php
				// --> Injection slider my_slider 10
		do_action( 'foundationpress_after_header' );
