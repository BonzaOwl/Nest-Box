<?php
/**
 * The template for displaying the category
 *
 *
 */
 get_header(); ?>

    <div class="container">
        <header class="category-title">
			<h1>Viewing Posts For:&nbsp;<?php single_cat_title(); ?></h1>		
        </header>
        
        <section class="list">
            <?php 
            if ( have_posts() ) : while ( have_posts() ) : the_post(); 
                get_template_part( 'content', get_post_format() );
            endwhile;
            
        else:?>
        
        <p class="lead">Looks like there are no posts for this category.</p>

        <?php endif; ?>

            </div>
        </section>

    </div>

<?php get_footer();