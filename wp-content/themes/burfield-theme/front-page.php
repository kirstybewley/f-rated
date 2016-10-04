<?php get_header(); ?>

<!--  main -->
<main role="main">
  <!-- Header section -->
  <?php get_template_part('templates/section-highlighted'); ?>
  <!-- /section -->

  <!-- Numbers section -->
  <section>
    <div class="row">
      <div class="col-12 island island-pcolor text-light text-center">
        <h3>WHERE ARE THE WOMEN?</h3>
        <p>In the top 100 films of 2014 women made up just:</p>

        <div class="col-12 col-4-s number-col-1">
          <h3 class="large-text weight-300">1.9%</h3>
          <p>of ALL directors</p>
        </div>
        <div class="col-12 col-4-s number-col-2">
          <h3 class="large-text weight-300">11.2%</h3>
          <p>of ALL writers</p>
        </div>
        <div class="col-12 col-4-s number-col-3">
          <h3 class="large-text weight-300">18.9%</h3>
          <p>of ALL producers</p>
        </div>
      </div>
    </div>
  </section>
  <!-- /section -->

  <!-- tagline section -->
  <section>
    <div class="row">
      <div class="col-12 island island-tcolor text-light text-center home-strapline">
        <h3 class="weight-100 col-10-m center-element">IT’S TIME FOR <strong>BETTER FEMALE ROLE MODELS</strong> IN FILM, <strong>FAIRER FUNDING</strong> FOR FEMALE DIRECTORS AND A REALISTIC REPRESENTATION OF <strong>50% OF THE POPULATION</strong> ON SCREEN</h3>
      </div>
    </section>
    <!-- /section -->
    <!-- Menu section -->
    <section class="featured-menu">
      <div class="row">
        <div class="col-12 col-6-m teaser">
          <a href="<?php echo esc_url( get_the_permalink(9) ); ?>"></a>
          <img src="<?php echo get_template_directory_uri(); ?>/img/rated/about.jpg" />
          <div class="title border">
            <h3>About F-Rated</h3>
          </div>
        </div>
        <div class="col-12 col-6-m teaser">
          <a href="<?php echo esc_url( get_the_permalink(13) ); ?>"></a>
          <img src="<?php echo get_template_directory_uri(); ?>/img/rated/films.jpg" />
          <div class="title border">
            <h3>F-Rated Film</h3>
          </div>

        </div>
        <div class="col-12 col-6-m teaser">
          <a href="<?php echo esc_url( get_the_permalink(15) ); ?>"></a>
          <img src="<?php echo get_template_directory_uri(); ?>/img/rated/allies.jpg" />
          <div class="title border">
            <h3>F-Rated Allies</h3>
          </div>
        </div>
        <div class="col-12 col-6-m teaser">
          <a href="<?php echo esc_url( get_the_permalink(17) ); ?>"></a>
          <img src="<?php echo get_template_directory_uri(); ?>/img/rated/we.jpg" />
          <div class="title border">
            <h3>We F-Rate</h3>
          </div>
        </div>
        <div class="col-12 col-6-m teaser">
          <a href="<?php echo esc_url( get_the_permalink(11) ); ?>"></a>
          <img src="<?php echo get_template_directory_uri(); ?>/img/rated/news.jpg" />
          <div class="title border">
            <h3>F-Rated News</h3>
          </div>
        </div>
        <div class="col-12 col-6-m teaser">
          <a href="#"></a>
          <img src="<?php echo get_template_directory_uri(); ?>/img/rated/needs.jpg" />
          <div class="title border">
            <h3>F-Rated Needs You</h3>
          </div>
        </div>
      </div>
    </section>
    <!-- /section -->

    <?php
    $args = array(
      'post_type' => 'post',
      'post_status' => 'publish',
      'posts_per_page' => 1,
      'caller_get_posts'=> 1,
      'orderby' => 'date',
      'order'   => 'DESC',
    );

    $wp_query = new WP_Query($args);
    if( $wp_query->have_posts() ) :
      while ($wp_query->have_posts()) : $wp_query->the_post();
    ?>

    <!-- News section -->
    <section class="featured-news">
      <div class="row">
        <div class="island-double col-12 col-6-m">
          <h4>Latest News</h4>
          <h3><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h3>
          <p>
            <?php echo wp_trim_words( strip_tags(get_the_content()), 80, '...' ); ?>
          </p>
          <p><a href="<?php echo esc_url( get_the_permalink(11) ); ?>" class="btn btn-primary">more news</a></p>
        </div>
        <a href="<?php the_permalink(); ?>" class="col-12 col-6-m block no-padding float-right">
          <img src="<?php echo the_post_thumbnail_url() ?>" />
        </a>
      </div>
    </section>
    <!-- /section -->

    <?php endwhile; endif; wp_reset_query(); ?>

  </main>
  <!-- /main -->


  <?php get_footer(); ?>
