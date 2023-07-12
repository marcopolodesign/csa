<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package CSA
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<div class="post-header flex justify-between container pt6 pb5">
	<div class="w-20-ns flex flex-column justify-between">
		<div class="entry-meta white no-deco">
			<?php

			$postId = get_the_ID();

			// Get the post author's display name
			$author_name = get_the_author_meta('display_name', get_post_field('post_author', $postId));

			// Get the post date
			$post_date = get_the_date('', $postId);

			echo '<p class="white no-deco">Written by <span class="ttc">' . $author_name . '</span></p>';
			echo '<p class="white no-deco">' . $post_date . '</p>';
			?>
		</div>

		<a href="/articles" class="flex gap-2 items-center white no-deco">
			<div class="rotate-180">
				<?php get_template_part('template-parts/content/arrow'); ?>
			</div>
			<p class="white ml2">Back to all articles</p>
		</a>
	</div>
	<div class="w-60-ns ml-auto mr-0 relative">
		<h2 class="white hover-main-color f1 smooth-t measure-wide mb3"><?php the_title();?></h2>
		<p class="white lh-copy measure-wide f4 mb4"><?php echo wp_trim_words( get_the_content(), 21 , '...' ); ?></p>

		<?php get_template_part('template-parts/tags', null, array('postId' => get_the_ID())); ?>		
	</div>
</div>

<div class="post-content container mb6">
	<div class="post-thumb relative w-100 mb4" style="height: 30vh">
		<div class="absolute-cover" style="background-image: url(<?php the_post_thumbnail_url($postId); ?>);"></div>
	</div>


	<div class="post-content-inner w-60-ns ml-auto mr-0">
		<?php 
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'capital-stack-advisors' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);
		?>

		<div class="flex items-center mt4 pt4 last-sharer">
			<p class="f3 main-color mr3">Share this article:</p>
			<?php get_template_part('template-parts/content/social-sharer', get_post_type());?> 
		</div>
	</div>

</div>

</article><!-- #post-<?php the_ID(); ?> -->
