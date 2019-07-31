<?php
/**
 * Template part for displaying photos
 *
 */
?>

<div class="home-post-photo"> 
<a href="<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); echo $url ?>">
    <?php the_post_thumbnail(); ?>
  </a>

</div>