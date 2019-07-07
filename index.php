<?php 

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 *
 */

get_header(); ?>

<main role="main" class="container">

  <div class="main-content">

      <!-- The main site title -->
      <h1 class="site-title">Welcome To The Nest</h1>
      
      <!--The site description, fed from the site settings -->
      <h5><?php echo get_bloginfo( 'description' ); ?></h5>

      </header>

      <div class="about-me" style="margin-top: 40px; background-color: #f2f2f2; border-radius 5px 5px 5px 5px;-webkit-border-radius:5px 5px 5px 5px;padding-top: .75rem; padding-bottom: .75rem">

        <h2>Hey! I'm Bonza</h2>              
        <section id="about">        
        <p>
          I am a developer based in the U.K currently working with C# & Microsoft SQL Server. I write about what I learn here. I also like to make things in my spare time.</p>
        <!--Category Listings, Add more manually, this isn't fed from a menu -->
        <div class="skills-container">
            <a href="<?php echo site_url(); ?>/category/c-sharp" class="skills">C#</a>
            <a href="<?php echo site_url(); ?>/category/powershell" class="skills">Powershell</a>
            <a href="<?php echo site_url(); ?>/category/microsoft-sql-server" class="skills">SQL Server</a>
            <a href="<?php echo site_url(); ?>/category/personal" class="skills">Personal</a>
        </div>
        </section>

      </div>
    
    <!--Start the post loop-->
    
    <div class="latest-posts" style="margin-top: 40px; background-color: #f2f2f2; border-radius 5px 5px 5px 5px;-webkit-border-radius:5px 5px 5px 5px;padding-top: .75rem; padding-bottom: .75rem">
      <h2>Latest Posts</h2>
      <section>

        <?php $args = array(
            'order'          => 'desc',
            'orderby'        => 'publish_date',
            'showposts'     => '5'
            
          );
          $latest = new WP_Query( $args );
          if ( $latest->have_posts() ) :  while ( $latest->have_posts() ) : $latest->the_post(); 
            get_template_part( 'content', get_post_format() );
                endwhile; endif; wp_reset_postdata(); 
            
        ?>

        <div class="all-posts-container">
        <a href="/posts" class="all-posts">View All</a>
        </a>

      </section>
    </div>
  
    <div class="latest-photos" style="margin-top: 40px; background-color: #f2f2f2; border-radius 5px 5px 5px 5px;-webkit-border-radius:5px 5px 5px 5px;padding-top: .75rem; padding-bottom: .75rem">

      <h2>Photography</h2>              
      <section id="photos">
      <img style="margin:5px;5px;5px;5px" src="<?php bloginfo('template_url'); ?>/images/1.jpg">
      <img style="margin:5px;5px;5px;5px" src="<?php bloginfo('template_url'); ?>/images/2.jpg">
      <img style="margin:5px;5px;5px;5px" src="<?php bloginfo('template_url'); ?>/images/3.jpg">
      <img style="margin:5px;5px;5px;5px" src="<?php bloginfo('template_url'); ?>/images/4.jpg">
             
      </section>

    </div>

  </div>

</main>

<?php get_footer();