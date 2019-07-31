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

  <nav class="nav">
    <div class="nav-container">
      <div class="links">
      <a class="link" style="padding-left:10px; padding-right: 10px;font-weight:bold;font-size:18px;text-decoration:none;color: #ffd17e" href="<?php echo site_url(); ?>">Home</a>
      <a class="link" style="padding-left:10px; padding-right: 10px;font-weight:bold;font-size:18px;text-decoration:none;color: #ffd17e" href="<?php echo site_url(); ?>/about">Me</a>
      <a class="link" style="padding-left:10px; padding-right: 10px;font-weight:bold;font-size:18px;text-decoration:none;color: #ffd17e" href="https://github.com/BonzaOwl" target="_blank">GitHub</a>
      <a class="link" style="padding-left:10px; padding-right: 10px;font-weight:bold;font-size:18px;text-decoration:none;color: #ffd17e" href="https://twitter.com/BonzaOwl" target="_blank">Twitter</a>
      </div>
    </div>
  </nav>