<?php
/**
 * Template part for displaying posts
 *
 */
?>

<div class="home-post" style="background: #ffd17e;padding:.75rem;margin-top: .75rem;margin-bottom: .75rem;margin-left: .75rem;margin-right: .75rem;border-radius:4px;"> 


<span class="home-post-date" style="display:inline">
    <time>Posted: <?php the_time( 'F j, Y' ); ?></time>
  </span>

<span class="single-category mobile-hide" style="display:inline"> 
    <?php
    foreach((get_the_category()) as $category) { 
        ?> <span class="category-high"> <?php echo $category->cat_name . ' ' ?> </span> <?php; 
    } 
    ?>
  </span>
  
  <a id="post-<?php the_ID(); ?>" href="<?php the_permalink(); ?>">
    <div class="home-post-title"><?php the_title(); ?></div>
  </a>

</div>