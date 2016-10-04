<?php get_header(); ?>

<!--  main -->
<main role="main">
  <!-- section -->
  <section>

    <h1><?php echo sprintf( __( '%s Search Results for ', 'burfield' ), $wp_query->found_posts ); echo get_search_query(); ?></h1>
    <div class="row clear-2-m">
      <?php get_template_part('loop'); ?>
    </div>

    <?php get_template_part('pagination'); ?>
  </section>
  <!-- /section -->
</main>
<!-- /main -->

<?php get_footer(); ?>
