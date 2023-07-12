<?php if (isset($args['postId'])) {
    $postId = $args['postId'];
    // Use the $postId variable as needed
    $tags = get_the_tags($postId);
} ?>


<div class="flex gap-2 tags-container">
    <?php if ($tags) {
        foreach ($tags as $tag) {
            $tag_link = get_tag_link($tag->term_id);
            echo '<p class="smooth-t"><span class="link-like" onclick="location.href=\'' . $tag_link . '\'">' . $tag->name . '</span></p>';
        }
    } ?>
</div>

