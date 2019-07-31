<?php
/**
 * Template part for displaying photos
 *
 */
?>

<div class="home-post-photo"> 
<a id="post-<?php the_ID(); ?>" href="<?php the_permalink(); ?>">
    <?php the_post_thumbnail(); ?>
  </a>

</div>