<?php
/**
 * The template for displaying the page content
 *
 *
 */

get_header(); ?>

<main role="main" class="container">

  <div class="main-content">

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
    
      <h2>Latest Posts</h2>
      <section>

        <?php $args = array(
            'order'          => 'desc',
            'orderby'        => 'publish_date'
            
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