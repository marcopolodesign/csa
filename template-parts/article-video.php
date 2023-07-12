
<?php 

if (isset($args['postId'])) {
    $postId = $args['postId'];
    // Use the $postId variable as needed
        $categories = get_the_category($postId);
}

?>

<div class="article-grid-video pa5 flex column-mobile relative mv5 db white no-deco overflow-hidden db" category=<?php echo $categories[0]->name; ?>>

    <div class="w-70-ns">
        <div class="blog yt-blog white no-deco column-mobile mb4 overflow-hidden db h-100 relative embed-container">
                <iframe width="100%"  height="auto !important" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" src='<?php the_field('youtube_emmbed', $postId);?>' allowfullscreen class="blog-img"></iframe>
        </div> 

    </div>
   

    <div class="measure-wide relative z-2 w-30-ns pa4 article-video-text">
        <h2 class="white f1 smooth-t measure-wide mv3"><?php the_title();?></h2>
        <p class="white lh-copy measure-wide f4"><?php echo wp_trim_words( get_the_content($postId), 21 , '...' ); ?></p>
        <?php get_template_part('template-parts/tags', null, array('postId' => $postId)); ?>       
    </div>

   
</div>


<style>
.embed-container {
--video--width: 1200;
--video--height: 675;
position: relative;
padding-bottom: calc(var(--video--height) / var(--video--width) * 100%);
overflow: hidden;
max-width: 100%;
background: black;
}

.embed-container iframe, .embed-container object, .embed-container embed {
position: absolute;
/* top: -240px; */
left: 0;
width: 100%;
height: 100%;
}
</style>
