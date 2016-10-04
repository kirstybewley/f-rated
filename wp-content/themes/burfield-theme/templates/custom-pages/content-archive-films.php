<?php

$term_id = get_queried_object()->term_id;
$term = get_term($term_id);

?>

<!--  main -->
<main role="main">
  <!-- Header section -->
  <section class="highlighted">
    <div class="row island-scolor">
      <div class="highlight--img">
        <h1 class="visually-hidden"><?php the_title(); ?></h1>
        <?php $image = get_field('featured_image', 'film_category_'.$term_id); ?>

        <img src="<?php echo $image['url']; ?>" />
      </div>

      <div class="highlight--text island text-light">
        <div class="highlight--text-inner">
          <h2><?php print get_field('subtitle', 'film_category_'.$term_id);  ?></h2>
            <?php print $term->description; ?>
        </div>
      </div>
    </div>
  </section>
  <!-- /section -->

  <!-- section -->
  <section>
    <div class="row clear-2-ml clear-3-l">

    <?php if (have_posts()): while (have_posts()) : the_post(); ?>
      <?php
      $link = get_field('imdb_link');
      $director = get_field('director');
      $written_by = get_field('written_by');

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

          <?php if(!empty($director)): ?>
            <p class="no-margin island-top-half">Directed by <?php print $director; ?></p>
          <?php endif; ?>

          <?php if(!empty($written_by)): ?>
            <p>Written by <?php print $written_by; ?></p>
          <?php endif; ?>

          <?php if(!empty($link)): ?>
            <p class="btn btn-secondary">IMDB</p>
          <?php endif; ?>
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

    </div>
  </section>
  <!-- /section -->
</main>
<!-- /main -->
