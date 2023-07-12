
<?php 

if (isset($args['postId'])) {
    $postId = $args['postId'];
    // Use the $postId variable as needed
        $categories = get_the_category($postId);

}


?>

<a href="<?php echo get_permalink($postId);?>" class="article-grid-full pa5 relative mv5 db white no-deco smooth-t overflow-hidden" category=<?php echo $categories[0]->name; ?>>
    <div class="measure-wide  relative z-2">

  
            <?php get_template_part('template-parts/tags', null, array('postId' => $postId)); ?>

        <h2 class="white f1 smooth-t measure-wide mv3"><?php the_title();?></h2>
        <p class="white lh-copy measure-wide f4"><?php echo wp_trim_words( get_the_content(), 21 , '...' ); ?></p>
    </div>

    <div class="absolute-cover bg-center cover smooth-t" style="background-image: url('<?php echo get_the_post_thumbnail_url($postId); ?>'); "></div>
   
</a>