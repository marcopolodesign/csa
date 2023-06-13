<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package CSA
 */

get_header();
?>

	<div data-barba="container" class="<?php the_title();?> bg-black" data-barba-namespace="<?php the_title();?>">

	<div class="page-starter main-gradient-bg pv6 relative">
        <div class="container pt4">
        <h1 class="black f0">This will be the page<br><b><?php the_title();?></b></h1>
        </div>

        <div class="absolute bottom-0 right-0 starter-arrow">
        <svg width="95" height="95" viewBox="0 0 95 95" fill="none" xmlns="http://www.w3.org/2000/svg">
         <circle cx="47.2948" cy="47.6473" r="46.8483" fill="white"/>
          <path d="M47.2948 32.7239L47.2948 62.5708" stroke="black" stroke-width="2"/>
          <path d="M35.7925 51.0685L47.2948 62.5708L58.7971 51.0685" stroke="black" stroke-width="2"/>
        </svg>

        </div>
    </div>


		<?php
			get_template_part( 'template-parts/reusable');
		?>

	</div> <!-- End Barba Container -->

<?php get_footer(); ?>
