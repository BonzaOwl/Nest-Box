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

<div class="container">

  <div class="main-content">

      <!-- The main site title -->
      <!--<h1 class="site-title">Welcome To The Nest</h1>-->
      
      <!--The site description, fed from the site settings -->
      <!--<h5><?php echo get_bloginfo( 'description' ); ?></h5>-->

      <div class="row">
        <div class="col-xs-6 col-md-12 col-lg-12">
          <div class="about-me" style="margin-top: 20px; background-color: #f2f2f2; border-radius 5px 5px 5px 5px;-webkit-border-radius:5px 5px 5px 5px;padding-top: .75rem; padding-bottom: .75rem">

            <h2>Hey! I'm Bonza</h2>              
            <section id="about">        
            <p>I am a C# & Microsoft SQL Server developer based in the U.K currently working within the public sector, I started this blog to share my experiences and things I pick up on my journey as a developer.</p>
            <p>I have some projects on <a href="https://github.com/BonzaOwl">GitHub</a> I work on in my spare time.</p>
            <!--Category Listings, Add more manually, this isn't fed from a menu -->
            <div class="skills-container">
                <a href="<?php echo site_url(); ?>/category/c-sharp" class="skills">C#</a>
                <a href="<?php echo site_url(); ?>/category/powershell" class="skills">Powershell</a>
                <a href="<?php echo site_url(); ?>/category/microsoft-sql-server" class="skills">SQL Server</a>
                <a href="<?php echo site_url(); ?>/category/personal" class="skills">Personal</a>
            </div>
            </section>

          </div>
        </div>
      </div>
    
    <!--Start the post loop-->
    
    <div class="row">
      <div class="col-xs-6 col-md-12 col-lg-12">
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
      </div>
    </div>
  
    <div class="row">
      <div class="col-xs-6 col-md-12 col-lg-12">            
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
    </div>

    <div class="row">
      <div class="col-xs-6 col-md-12 col-lg-12">  
        <div class="latest-projects" style="margin-top: 40px; background-color: #f2f2f2; border-radius 5px 5px 5px 5px;-webkit-border-radius:5px 5px 5px 5px;padding-top: .75rem; padding-bottom: .75rem">

          <h2>Latest Projects</h2>              
          <section id="photos">
            
          <div class="row">
            <div class="col-md-4">
              <p>SQL Server Setup</p>
            </div>
            <div class="col-md-4">
              <p>A script to help setup new instances of SQL Server</p>
            </div>
            <div class="col-md-4">
              <a href="https://github.com/BonzaOwl/SQL-Server-Setup" target="_blank"><i style="font-size: 30px;" class="fab fa-github-square"></i></a>
            </div>
          </div>

          <hr/>
          
          <div class="row">
            <div class="col-md-4">
              <p>VeganOwl.me</p>
            </div>
            <div class="col-md-4">
              <p>A repository of everything Vegan, maintained by me</p>
            </div>
            <div class="col-md-4">
              <a href="https://www.veganowl.me" target="_blank"><i style="font-size: 30px;" class="fab fa-chrome"></i></a>
            </div>
          </div>

          <hr/>

          <div class="row">
            <div class="col-md-4">
              <p>Availability Agent</p>
            </div>
            <div class="col-md-4">
              <p>The Availability Agent stored procedure gives a method of enabling and disabling SQL Server Agent Job depending on the role of the node executing the procedure in an availability group.</p>
            </div>
            <div class="col-md-4">
             <a href="https://github.com/BonzaOwl/Availability-Agent" target="_blank"><i style="font-size: 30px;" class="fab fa-github-square"></i></a>
            </div>
          </div>

          <hr/>

          <div class="row">
            <div class="col-md-4">
              <p>Frequent Agent</p>
            </div>
            <div class="col-md-4">
              <p>Frequent Agent is a SQL Server Stored Procedure that will check for frequently running SQL Agent Jobs move their Agent History from MSDB to the JobHistory_Archive table which is created inside the DBA_Tasks database and then purge the data from the MSDB database.</p>
            </div>
            <div class="col-md-4">
            <a href="https://github.com/BonzaOwl/Frequent-Agent" target="_blank"><i style="font-size: 30px;" class="fab fa-github-square"></i></a>
            </div>
          </div>
                
          </section>

        </div>
      </div>
    </div>

  </div>

</div>

<?php get_footer();