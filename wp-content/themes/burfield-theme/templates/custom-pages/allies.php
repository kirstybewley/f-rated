<?php

$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$alliesargs = array(
  'post_type' => 'allies',
  'post_status' => 'publish',
  'posts_per_page' => -1,
  'caller_get_posts'=> 1,
  'paged' => $paged,
  'orderby' => 'title',
  'order'   => 'ASC',
);

$testargs = array(
  'post_type' => 'testimonials',
  'post_status' => 'publish',
  'posts_per_page' => -1,
  'caller_get_posts'=> 1,
  'paged' => $paged,
  'orderby' => 'date',
  'order'   => 'DESC',
);

?>

<?php get_header(); ?>

<!--  main -->
<main role="main">
  <!-- Header section -->
  <?php get_template_part('templates/section-highlighted'); ?>
  <!-- /section -->

  <?php

  $wp_query = new WP_Query($testargs);
  if( $wp_query->have_posts() ) :

    ?>

  <!-- test section -->
  <section>
    <div class="row slick">
      <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
        <div>
          <div class="col-12 col-6-m island-double">
            <h4>TESTIMONIALS</h4>
            <h3><?php the_title(); ?></h3>
            <p><?php echo strip_tags(get_the_content(), '<a>'); ?></p>
            <h4>Name &amp; Company</h4>
          </div>
          <div class="col-12 col-6-m no-padding float-right">
            <img src="<?php echo the_post_thumbnail_url() ?>" />
          </div>
        </div>
      <?php endwhile; ?>
    </div>
  </section>
  <!-- /section -->

  <?php endif; wp_reset_query(); ?>

  <!-- allies section -->
  <section>
    <div class="row">
      <div class="col-12 island-top island-quatcolor text-center">
        <h2 class="island-bottom-half">SOME OF OUR ALLIES INCLUDE</h2>

        <div class="row">
          <?php

          $wp_query = new WP_Query($alliesargs);
          if( $wp_query->have_posts() ) :

            ?>
            <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

              <?php
              $link = get_field('website');

              ?>
              <div class="col-12 col-6-m col-4-l teaser">
                <?php if(!empty($link)): ?>
                  <a href="<?php print $link; ?>" target="_blank"></a>
                <?php else: ?>
                  <span class="overlay"></span>
                <?php endif; ?>
                <img src="<?php echo the_post_thumbnail_url() ?>" />
                <div class="title">
                  <h3><?php the_title(); ?></h3>
                  <p>
                    <?php echo wp_trim_words( strip_tags(get_the_content()), 20, '...' ); ?>
                  </p>
                  <?php if(!empty($link)): ?>
                    <p class="text-quincolor"><?php print $link; ?></p>
                  <?php endif; ?>
                </div>
              </div>

            <?php endwhile; ?>
            <!-- /section -->
          <?php endif; wp_reset_query(); ?>

        </div>
      </div>
    </div>
  </section>
  <!-- /section -->

  <!-- join section -->
  <section>
    <div class="row join-us-block">
      <div class="col-12 island-double text-center text-light">
        <h2>JOIN US</h2>
        <p>
          TOGETHER WE CAN PUT EQUALITY ON SCREEN<br/>
          What you can do to support F-Rated:<br/>
          Watch more F-Rated films<br/>
          Pledge support and share on social media<br/>
          Ask film festivals and your local cinema to use the F-Rating<br/>
          Sign up to our newsletter below and follow us on Facebook <br/>
          MAKE SOME NOISE!
        </p>
      </div>
    </div>
  </section>
</main>


<?php get_footer(); ?>
