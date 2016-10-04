<?php

$film_category = get_categories(array(
  'taxonomy' => 'film_category'
));

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

      <?php
      foreach ($film_category as $cat) :
        $image = get_field('featured_image', 'film_category_'. $cat->term_id );
      ?>

      <div class="col-12 col-6-m teaser">
        <a href="<?php print esc_url( get_category_link( $cat->term_id) ); ?>"></a>
        <img src="<?php echo $image['url']; ?>" />
        <div class="title border">
          <h3><?php print $cat->name; ?></h3>
        </div>
      </div>

      <?php endforeach; ?>

    </div>
  </section>
  <!-- /section -->


</main>


<?php get_footer(); ?>
