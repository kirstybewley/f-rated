<!doctype html>
<html <?php language_attributes(); ?>>

  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">

    <link href="https://fonts.googleapis.com/css?family=Droid+Sans" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/slick/slick.css" />
    <script src="<?php echo get_template_directory_uri(); ?>/assets/slick/slick.min.js"></script>

    <link href="<?php echo get_template_directory_uri(); ?>/img/favicon.png" rel="shortcut icon">
    <link href="<?php echo get_template_directory_uri(); ?>/img/gravatar.png" rel="apple-touch-icon-precomposed">

    <script src="https://use.typekit.net/vbm5rrq.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>

    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>

    <?php get_template_part('templates/section', 'mobile-nav'); ?>

    <!-- wrapper -->
    <div id="page">

      <!-- header -->
      <?php get_template_part('templates/section', 'header'); ?>
      <!-- /header -->

      <div class="content-wrapper container clear">
        <div class="row">

          <?php  registered_sidebar( 'left-sidebar' );  ?>
