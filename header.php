<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package CSA
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://unpkg.com/tachyons@4.12.0/css/tachyons.min.css"/>


	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'capital-stack-advisors' ); ?></a>

	<header id="masthead" class="site-header flex jic fixed top-0 left-0 w-100 container-xs pv3">

		<a class="logo" href="/">
			<?php get_template_part('template-parts/content/logo');?>
		</a>

		<div class="header-aob flex items-center">

			<?php
			
				wp_nav_menu( array(
					'theme_location' => 'header',
					'menu_id'        => 'header-left-menu',
					'container' => 'ul',
					'menu_class' => 'header-nav w-max ml-auto mr-0 flex jic list-none black',
				) );
			?>

			<div class="social-header ml4-ns">
				<a href="https://www.instagram.com/managementplusent/" target="_blank">
					<?php get_template_part('template-parts/content/insta');?>
				</a>
			</div>
		</div>


	</header><!-- #masthead -->



	<div class="cursor desktop"></div>
	<div class="flex pre-load">
		<div class="bg-main-dark-color"></div>
		<div class="bg-main-dark-color"></div>
		<div class="bg-main-dark-color"></div>
		<div class="m-auto white absolute-center overflow-hidden tc w-80">
			<!-- <p class="f5 fw3 flex tc items-center justify-center main-color">Page is <span class="mh3"></span> loading</p> -->
			<span class="db druk f0 ttu fw3 mv4 main-color"></span>
			<!-- <p class="f5 fw3">Page is loading...</p> -->
		</div>

	</div>
	
	<?php get_template_part('template-parts/contact'); ?>
	<div data-barba="wrapper">