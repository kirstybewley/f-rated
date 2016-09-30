<header class="header clear" role="banner">
  <div class="container">
    <div class="row">
      <!-- logo -->
      <div class="logo col-12 col-2-s island">
        <a href="<?php echo home_url(); ?>">
          <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo" class="logo-img">
        </a>
      </div>
      <!-- /logo -->

      <!-- nav -->
      <nav class="nav island col-12 col-7-s" role="navigation">
        <?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'depth' => 1, 'menu_class' => 'inline',  ) ); ?>
      </nav>
      <!-- /nav -->

      <ul class="social inline island col-4 col-2-s">
        <li><a href="#"><span class="icon icon-facebook"></span><span class="visually-hidden">Facebook</span></a></li>
        <li><a href="#"><span class="icon icon-twitter"></span><span class="visually-hidden">Twitter</span></a></li>
      </ul>

      <img class="island col-4 col-1-s" src="<?php echo get_template_directory_uri(); ?>/img/rated/Image-81.png" alt="Bath Film Festival" />
    </div>
  </div>
</header>
