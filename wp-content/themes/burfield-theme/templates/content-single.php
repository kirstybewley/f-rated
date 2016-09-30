<!--  main -->
<main role="main" class="island">
  <!-- section -->
  <section>

    <?php if (have_posts()): while (have_posts()) : the_post(); ?>

      <!-- post thumbnail -->
      <?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
        <div class="row col-12 col-6-m island-bottom-margin">
          <?php the_post_thumbnail(); // Fullsize image for the single post ?>
        </div>
      <?php endif; ?>
      <!-- /post thumbnail -->

      <h1 class="clear island-bottom"><?php the_title(); ?></h1>

      <!-- article -->
      <article id="post-<?php the_ID(); ?>" class="island-bottom">

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
