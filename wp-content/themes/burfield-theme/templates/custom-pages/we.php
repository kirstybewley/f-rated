<?php

$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$joinsargs = array(
  'post_type' => 'joined',
  'post_status' => 'publish',
  'posts_per_page' => 100,
  'caller_get_posts'=> 1,
  'paged' => $paged,
  'orderby' => 'title',
  'order'   => 'ASC',
);

?>

<?php get_header(); ?>

<!--  main -->
<main role="main">
  <!-- Header section -->
  <?php get_template_part('templates/section-highlighted'); ?>
  <!-- /section -->

  <!-- film cats section -->
  <section>
    <div class="row">
      <div class="col-12 island-top island-quatcolor text-center">
        <h2 class="island-bottom-half">OVER 40 FILM FESTIVALS AND CINEMAS HAVE JOINED SO FAR:</h2>

        <div class="row">
          <?php

          $wp_query = new WP_Query($joinsargs);
          if( $wp_query->have_posts() ) :

            ?>
            <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
              <div class="col-12 col-6-m col-4-l teaser">
                <!-- <a href="<?php the_permalink(); ?>"></a> -->
                <span class="overlay"></span>
                <img src="<?php echo the_post_thumbnail_url() ?>" />
                <div class="title">
                  <h3><?php the_title(); ?></h3>
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


</main>


<?php get_footer(); ?>
