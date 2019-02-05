<?php
/**
 * The template for displaying search results pages
 *
 */?>

<?php 
get_header(); ?>

	<div class="container">
        <header class="search-enabled">
			<h1>Search Results For:&nbsp;<?php echo get_search_query(); ?></h1>
			<form id="search-form" role="search" class="search-form" method="get" action="<?php echo home_url( '/' ); ?>">
				<div class="search-wrapper">
					<input id="filter" type="search" placeholder="<?php echo esc_attr_x( 'Filter', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>"
		name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>">
					<i class="fas fa-search search-icon"></i>
				</div>
            </form>
		</header>
		
		<section class="list">
        <?php 
        if ( have_posts() ) : 
            while ( have_posts() ) : the_post(); 
                get_template_part( 'content', get_post_format() ); 
			endwhile; ?>

			</div>
		</section>

        <?php 
        else : ?>
		    <p class="lead">Nothing was found, maybe give a different query a try.</p>
        <?php 
        endif; wp_reset_postdata(); ?>

<?php get_footer(); 