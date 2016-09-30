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

      <span class="clear date island-top block text-scolor"><?php the_time('F j, Y'); ?></span>
      <h1 class="island-bottom"><?php the_title(); ?></h1>

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
<a href="<?php echo esc_url( get_the_permalink(11) ); ?>" class="btn btn-primary island-bottom-margin">Back to News</a>
<!-- /section -->
</main>
<!-- /main -->
