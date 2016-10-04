<?php if (have_posts()): while (have_posts()) : the_post(); ?>

  <div class="col-12 col-6-m island">
    <a href="<?php the_permalink(); ?>" class="col-12 col-6-m block">
      <img src="<?php echo the_post_thumbnail_url() ?>" />
    </a>
    <div class="col-12 col-6-m float-right">
      <h3><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h3>
      <p>
      <?php echo wp_trim_words( strip_tags(get_the_content()), 50, '...' ); ?>
      </p>
    </div>
  </div>

<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'burfield' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>
