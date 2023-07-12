
<?php 

if (isset($args['postId'])) {
    $postId = $args['postId'];
    // Use the $postId variable as needed
    $categories = get_the_category($postId);
}

?>


<div class="related-projects-container container mt6 pb6">
	<div class="flex flex-column mb3">
		<div class="flex jic">
			<h2 class="white f4 mr3">Related Articles</h2>
			<div class="heading-line"></div>
		</div>
		<a href="/articles" class="white no-deco hover-main-color mt3">View All</a>
	</div>
		
		<div class="related-projects flex flex-column jic column-mobile">
			<?php
			
					$relatedArgs = array(
					'post_type' => 'post',
					'orderby' => 'rand',
					'order' => 'DESC',
					'cat' => 3,
					'posts_per_page' => 2, 
				);
					$related = new WP_Query($relatedArgs);
					if ( $related->have_posts() ) : while ( $related->have_posts() ) : $related->the_post();
				
				get_template_part('template-parts/articles', null, array('postId' => $postId));

			endwhile; endif; ?>

		</div>
		
	</div>

<style>
	.heading-line {
    height: 1px;
    flex: 1 0 0;
    background-color: #fff;
}

.related-projects-container .heading-line.top-0 {
	display: none
}

</style>