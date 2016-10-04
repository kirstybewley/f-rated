<!--  main -->
<main role="main" class="island">
  <!-- Header section -->
  <?php// get_template_part('templates/section-highlighted'); ?>
  <!-- /section -->

  <!-- section -->
  <section>

    <?php if (have_posts()): while (have_posts()) : the_post(); ?>

      <!-- article -->
      <article id="post-<?php the_ID(); ?>" <?php post_class('col-12'); ?>>
        <h1 class="clear island-bottom-half"><?php the_title(); ?></h1>

        <?php the_content(); ?>

      </article>
      <!-- /article -->

    <?php endwhile; ?>

    <?php else: ?>

      <!-- article -->
      <article>

        <h2><?php _e( 'Sorry, nothing to display.', 'burfield' ); ?></h2>

      </article>
      <!-- /article -->

    <?php endif; ?>

  </section>
  <!-- /section -->
</main>
<!-- /main -->
