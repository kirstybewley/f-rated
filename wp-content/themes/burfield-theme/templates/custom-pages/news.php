<?php

$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$newsargs = array(
  'post_type' => 'post',
  'post_status' => 'publish',
  'posts_per_page' => 12,
  'caller_get_posts'=> 1,
  'paged' => $paged,
  'orderby' => 'date',
  'order'   => 'DESC',
);

$sticky = get_option( 'sticky_posts' );
$snewsargs = array(
  'post_type' => 'post',
  'post_status' => 'publish',
  'posts_per_page' => 1,
  'caller_get_posts'=> 1,
  'p' => $sticky[0]
);

?>

<?php get_header(); ?>

<!--  main -->
<main role="main">
  <!-- Header section -->
  <?php get_template_part('templates/section-highlighted'); ?>
  <!-- /section -->

  <?php
    if(!empty($sticky)) :
      $wp_query = new WP_Query($snewsargs);
      if( $wp_query->have_posts() ) :
        while ($wp_query->have_posts()) : $wp_query->the_post();
  ?>

  <!-- latest section -->
  <section class="island-margin island-quatcolor">
    <div class="row">
      <a href="<?php the_permalink(); ?>" class="col-12 col-6-m block">
        <img src="<?php echo the_post_thumbnail_url() ?>" />
      </a>
      <div class="col-12 col-6-m island float-right">
        <h3><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h3>
        <p>
          <?php echo wp_trim_words( strip_tags(get_the_content()), 100, '...' ); ?>
        </p>

        <?php
          $title = get_the_title();
          $url = get_the_permalink();
        ?>

        <div class="social-media share-this island-top">
          <ul class="inline social">
            <li><a href="https://twitter.com/share?url=<?php print $url; ?>&amp;text=<?php print urlencode($title); ?>&amp;via=F__Rating" target="_blank"><span class="icon icon-twitter"></span><span class="visually-hidden">Twitter</span></a></li>
            <li><a href="http://www.facebook.com/sharer.php?u=<?php print $url; ?>" target="_blank"><span class="icon icon-facebook"></span><span class="visually-hidden">Facebook</span></a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- /section -->
<?php endwhile; endif; wp_reset_query(); endif; ?>

  <?php

    $wp_query = new WP_Query($newsargs);
    if( $wp_query->have_posts() ) :

  ?>
  <!-- news section -->
  <section class="island">
    <div class="row clear-2-m">

      <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
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

    </div>
      <?php get_template_part('pagination'); ?>
  </section>
  <!-- /section -->
  <?php endif; wp_reset_query(); ?>


</main>


<?php get_footer(); ?>
