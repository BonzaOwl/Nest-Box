<?php
/**
 * The template for displaying sing posts entries
 *
 *
 */ ?>

<article class="article" id="post-<?php the_ID(); ?>">
    <div class="container">
		<header class="single-header">
			<h1><?php the_title(); ?></h1>
			<div class="date">
				Posted On: <time datetime="<?php the_time( 'Y-m-d' ); ?>"> 
				<?php the_time( 'F j, Y' ); ?>
                </time>
                In: 
                <span class="category"><?php
                foreach((get_the_category()) as $category) { 
                    echo $category->cat_name . ' '; 
                } 
                ?></span>
            </div>
			
		</header>

		<?php the_content(); ?>	

        <?php wcr_share_buttons(); ?>

    </div>
</article>