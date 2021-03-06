<?php
/**
 * Template Name: BlogPosts
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 */

get_header(); 
    if ( have_posts() ) : while ( have_posts() ) : the_post(); 
		get_template_part( 'content-page-posts', get_post_format() );
    endwhile; endif; 
get_footer(); 