<!doctype html>
<html <?php language_attributes(); ?>>

  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">


    <link href="<?php echo get_template_directory_uri(); ?>/assets/slick/slick.css" />
    <script src="<?php echo get_template_directory_uri(); ?>/assets/slick/slick.min.js"></script>

    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>

    <?php get_template_part('templates/section', 'mobile-nav'); ?>

    <!-- wrapper -->
    <div id="page">

      <!-- header -->
      <?php get_template_part('templates/section', 'header'); ?>
      <!-- /header -->

      <div class="content-wrapper container clear island-top-margin">
        <div class="row">

          <?php  registered_sidebar( 'left-sidebar' );  ?>
