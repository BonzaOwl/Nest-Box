<?php
/**
 * The template for displaying the header
 *
 *
 */?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Call the wordpress header to get meta tags and enqueue styles -->
    <?php wp_head(); ?>
  </head>

  <body>

  <!-- The main site navigation bar, this is responsive -->
  <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
  <img src="<?php echo get_bloginfo('template_directory'); ?>/images/logo.png" width="30px" height="30px" /> 
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbar">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url(); ?>">Home</a>
          </li>
          <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url(); ?>/about">About</a>
            </li>  
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="https://github.com/BonzaOwl" target="_blank"><i class="fab fa-github"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://twitter.com/BonzaOwl" target="_blank"><i class="fab fa-twitter-square"></i></a>
            </li>            
        </ul>
      </div>
    </nav>