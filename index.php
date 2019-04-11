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

        <!--Category Listings, Add more manually, this isn't fed from a menu -->
        <div class="cat-container">
            <a href="<?php echo site_url(); ?>/category/c-sharp" class="cat">C#</a>
            <a href="<?php echo site_url(); ?>/category/powershell" class="cat">Powershell</a>
            <a href="<?php echo site_url(); ?>/category/microsoft-sql-server" class="cat">SQL Server</a>
            <a href="<?php echo site_url(); ?>/category/personal" class="cat">Personal</a>
        </div>

        <!-- Search Box -->
        <header class="search-enabled">
          <form id="search-form" role="search" class="search-form" method="get" action="<?php echo home_url( '/' ); ?>">
          <div class="search-wrapper">
            <input id="filter" type="search" placeholder="<?php echo esc_attr_x( 'Search', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>"
            name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>">
            <i class="fas fa-search search-icon"></i>
          </div>
        </form>

      </header>
    
    <!--Start the post loop-->
    <section>

      <?php $args = array(
          'order'          => 'desc',
          'orderby'        => 'publish_date',
          
        );
        $latest = new WP_Query( $args );
        if ( $latest->have_posts() ) :  while ( $latest->have_posts() ) : $latest->the_post(); 
          get_template_part( 'content', get_post_format() );
              endwhile; endif; wp_reset_postdata(); 
          
      ?>

    </section>

  </div>

</main>

<?php get_footer();