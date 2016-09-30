<section class="highlighted">
  <div class="row island-scolor">
    <div class="highlight--img">
      <h1 class="visually-hidden"><?php the_title(); ?></h1>
      <?php the_post_thumbnail();?>
    </div>

    <div class="highlight--text island text-light">
      <div class="highlight--text-inner">
        <h2><?php print get_field('subtitle');  ?></h2>
        <?php if (have_posts()): while (have_posts()) : the_post(); ?>
          <?php the_content(); ?>
        <?php endwhile; endif; ?>
      </div>
    </div>
  </div>
</section>
