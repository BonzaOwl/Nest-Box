<?php
/**
 * Template Name: PhotoGallery
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 * https://stackoverflow.com/questions/20955818/wordpress-loop-posts-in-bootstrap-3-grid-layout
 *
 */

get_header(); ?>

<div class="container my-container">

<?php
  $args=array(
     'post_type' => 'photography',
     'order'          => 'desc',
     'orderby'        => 'publish_date',
     'post_status' => 'publish',
     'posts_per_page' => 18
    );

  $my_query = null;
  $my_query = new WP_Query($args);

  if( $my_query->have_posts() ) {

    $i = 0;
    while ($my_query->have_posts()) : $my_query->the_post();
  // modified to work with 3 columns
  // output an open <div>
  if($i % 3 == 0) { ?> 

  <div class="row">

  <?php
  }
  ?>

    <div class="col-md-4">
      <div class="my-inner">
      <?php get_template_part( 'content-page-photo', get_post_format() ); ?>
      </div>
    </div>  

      <?php $i++; 
      if($i != 0 && $i % 3 == 0) { ?>
        </div><!--/.row-->
        <div class="clearfix"></div>

      <?php
       } ?>

      <?php  
        endwhile;
        }
        wp_reset_query();
        ?>

</div><!--/.container--> <?php 
  

get_footer(); 