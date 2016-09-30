<?php get_header(); ?>

<?php if (locate_template('templates/custom-pages/content-archive-' . get_post_type() . '.php') != '') : ?>

  <?php get_template_part('templates/custom-pages/content-archive', get_post_type() ); ?>

<?php else : ?>

  <?php get_template_part('templates/content', 'archive'); ?>

<?php endif; ?>

<?php get_footer(); ?>
