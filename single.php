<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package CSA
 */

get_header();
?>

	<div data-barba="container" class="article-single bg-black pt5" data-header-color="light" data-barba-namespace="single-article">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			get_template_part('template-parts/related-posts', null, array('postId' => get_the_ID()));

		endwhile; // End of the loop.
			
		?>

	


	</div><!-- End Barba Container -->

<?php
get_footer();
