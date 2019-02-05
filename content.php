<?php
/**
 * Template part for displaying posts
 *
 */
?>

<a class="post" id="post-<?php the_ID(); ?>" href="<?php the_permalink(); ?>">
<span class="single-category mobile-hide">
<?php
foreach((get_the_category()) as $category) { 
    echo $category->cat_name . ' '; 
} 
?>
</span>
  <div class="post-title"><?php the_title(); ?></div>
	  <span class="post-date"><time><?php the_time( 'F j, Y' ); ?></time></span>
</a>