<?php
/** Template Name: Articles */
get_header();
?>

<style>

html {
    margin-top: 0px !important;
}
</style>

<div data-barba="container" class="articles bg-black" data-header-color="light" data-barba-namespace="articles">
    <div class="page-starter pv6 relative">
        <div class="pt4 flex justify-between">
            <div class="relative w-20 bg-red h-100 intro-img" style="transform: translateY(0)!important">
                <div class="absolute-cover bg-center cover" style="background-image: url('/wp-content/uploads/2023/06/Group-4.jpg'); "></div>
            </div>
            <div class="page-title w-50-ns ml-0 mr-auto pl6-ns">
                <h1 class="main-color f0 mb2">Articles & <br>Insights</h1>
                <p class="lh-copy f3 fw3">CSA operates with the mindset of the property owner. Our actions and thought process along the way are more reflective of the operator, with the ultimate goal of securing financing for the project.</p>
            </div>

            <div class="relative w2 bg-red intro-img" style="transform: translateY(0)!important">
                <div class="absolute-cover bg-center cover" style="background-image: url('/wp-content/uploads/2023/06/Group-4.jpg'); "></div>
            </div>
        </div>
    </div>

    <div class="container-xs">
        <?php $postGrid = array(
            'post_type' => 'post',
            'posts_per_page' => -1,
            'category' => 3,
        );

        $post_query = new WP_Query($postGrid);
        
        if($post_query->have_posts() ) : while($post_query->have_posts() ) :
            $post_query->the_post(); 

            $postId = get_the_ID(); // Get the current post ID
            $width = get_field('width');

            if ($width === 'w-100') :
                get_template_part('template-parts/article-full', null, array('postId' => $postId));
            elseif ($width === 'video') :
                get_template_part('template-parts/article-video', null, array('postId' => $postId));
            else :
                get_template_part('template-parts/articles', null, array('postId' => $postId));
            endif;


         endwhile; endif; wp_reset_postdata();
        ?>
    </div>

    <?php get_template_part('template-parts/reusable'); ?>

</div> <!-- End Barba Container -->
<?php get_footer(); ?>