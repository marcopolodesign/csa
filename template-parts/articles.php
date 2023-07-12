
<?php 

if (isset($args['postId'])) {
    $postId = $args['postId'];
    // Use the $postId variable as needed
    $categories = get_the_category($postId);
}

?>

<a href="<?php echo get_permalink($postId);?>" class="article-grid-child flex items-stretch column-mobile justify-between no-deco mv5" category=<?php echo $categories[0]->name; ?>>
    <div class="w-30-ns smooth-t">
        <div class="relative w-100 h-100 smooth-t">
            <img src='<?php echo get_the_post_thumbnail_url($postId); ?>' />
        </div>
    </div>
    <div class="w-60-ns ml-auto mr-0 pv5 relative">
        <h2 class="white hover-main-color f1 smooth-t measure-wide mv3"><?php the_title();?></h2>
        <p class="white lh-copy measure-wide f4 mb4"><?php echo wp_trim_words( get_the_content(), 21 , '...' ); ?></p>

        <?php get_template_part('template-parts/tags', null, array('postId' => $postId)); ?>


        <div class="heading-line absolute bottom-0 w-100"></div>
        <div class="heading-line absolute top-0 w-100"></div>
    </div>
   
</a>