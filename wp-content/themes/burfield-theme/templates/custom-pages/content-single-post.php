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
      <h1 class="island-bottom-half"><?php the_title(); ?></h1>

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

<?php
  $title = get_the_title();
  $url = get_the_permalink();
?>

<div class="social-media share-this">
  <h4 class="no-margin">Share this</h4>
  <ul class="inline social">
    <li><a href="https://twitter.com/share?url=<?php print $url; ?>&amp;text=<?php print urlencode($title); ?>&amp;via=F__Rating" target="_blank"><span class="icon icon-twitter"></span><span class="visually-hidden">Twitter</span></a></li>
    <li><a href="http://www.facebook.com/sharer.php?u=<?php print $url; ?>" target="_blank"><span class="icon icon-facebook"></span><span class="visually-hidden">Facebook</span></a></li>
  </ul>
</div>

<a href="<?php echo esc_url( get_the_permalink(11) ); ?>" class="btn btn-primary island-bottom-margin">Back to News</a>
<!-- /section -->
</main>
<!-- /main -->
