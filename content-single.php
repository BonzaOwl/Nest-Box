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

                <span class="home-post-date" style="display:inline">
                    <time>Posted: <?php the_time('F j, Y'); ?></time>
                </span>

                <?php
                foreach ((get_the_category()) as $category) {
                    ?> <span class="category-high"> <?php echo $category->cat_name . ' ' ?> </span> <? php;
                                                                                                    } ?>
            </div>

        </header>

        <?php the_content(); ?>

        <?php wcr_share_buttons(); ?>

    </div>
</article>