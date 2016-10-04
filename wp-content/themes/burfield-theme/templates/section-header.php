<header class="header clear" role="banner">
  <div class="container">
    <div class="row">
      <!-- logo -->
      <div class="logo col-4 col-2-s island-top-half">
        <a href="<?php echo home_url(); ?>">
          <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo" class="logo-img">
        </a>
      </div>
      <!-- /logo -->

      <!-- nav -->
      <nav class="nav island col-12 col-7-s none block-m" role="navigation">
        <?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'depth' => 1, 'menu_class' => 'inline',  ) ); ?>
      </nav>
      <!-- /nav -->

      <div class="none block-m text-right">
        <ul class="social inline island col-4 col-2-s">
          <li><a href="<?php print get_field('facebook_profile', 'option'); ?>"><span class="icon icon-facebook"></span><span class="visually-hidden">Facebook</span></a></li>
          <li><a href="<?php print get_field('twitter_profile', 'option'); ?>"><span class="icon icon-twitter"></span><span class="visually-hidden">Twitter</span></a></li>
        </ul>
      </div>

      <img class="bff col-4 col-1-s none block-m" src="<?php echo get_template_directory_uri(); ?>/img/bff-logo.svg" alt="Bath Film Festival" />

      <div id="mobile-menu-button" class="none-m text-scolor">
        <div class="hamburger">
          <span></span>
        </div>
      </div>
    </div>
  </div>
</header>
