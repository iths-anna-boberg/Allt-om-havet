<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no" />
  <?php wp_head(); ?>
  <link rel="preconnect" href="https://fonts.gstatic.com">
</head>
<body>
  <header class="aoh-hero" style="background-image: url(<?php echo esc_url(header_image()); ?>)">
    <nav class="navbar navbar-expand-lg navbar-dark aoh-navbar">
      <?php 
        if(function_exists('the_custom_logo')){
          echo "<a class='navbar-brand' href='#'>" . the_custom_logo() . "</a>";
        }
      ?>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarText">
        <?php
          wp_nav_menu(
            array(
              'menu' => 'primary',
              'theme_location' => 'primary',
              'items_wrap' => '<ul class="navbar-nav ml-auto aoh-navbar-nav">%3$s</ul>'
            )
          );
        ?>
        <button class="aoh-btn-outline">
          Boka hamnplats
        </button>
      </div>
    </nav>
    <div class="jumbotron aoh-jumbotron">
      <div class="container aoh-hero-cta">
        <h1 class="aoh-hero-heading">Sover du också på lektionstid?</h1>
        <p class="aoh-hero-preamble">Boka en hamnplats hos oss istället.</p>
        <button class="aoh-btn-solid">Hitta hamnplats</button>
      </div>
    </div>
  </header>