<?php get_header(); ?>

<!--  main -->
<main role="main">
  <!-- Header section -->
  <?php get_template_part('templates/section-highlighted'); ?>
  <!-- /section -->

  <!-- section -->
  <section>
    <?php get_template_part('loop'); ?>

    <?php get_template_part('pagination'); ?>
  </section>
  <!-- /section -->
</main>
<!-- /main -->

<?php get_footer(); ?>
