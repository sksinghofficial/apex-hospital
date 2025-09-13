<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <!-- WordPress Title -->
  <title><?php wp_title('|', true, 'right'); ?> <?php bloginfo('name'); ?></title>
  
  <!-- Meta -->
  <meta name="description" content="<?php bloginfo('description'); ?>">
  
  <!-- Favicon -->
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png">
  <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png">

  <?php wp_head(); ?>
</head>
<body <?php body_class('index-page'); ?>>

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="header-container container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <!-- Logo -->
      <a href="<?php echo home_url(); ?>" class="logo d-flex align-items-center me-auto me-xl-0">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="<?php bloginfo('name'); ?>">
      </a>

     <nav id="navmenu" class="navmenu">
  <?php
    wp_nav_menu(array(
      'theme_location' => 'primary',
      'container'      => false,
      'menu_class'     => '',
      'walker'         => new Custom_Nav_Walker(),
    ));
  ?>
  <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
</nav>


      <!-- Appointment Button -->
      <a class="btn-getstarted" href="<?php echo home_url('/appointment'); ?>">Appointment</a>

    </div>
  </header>
