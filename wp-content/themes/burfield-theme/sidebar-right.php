<?php
if ( ! is_active_sidebar( 'right-sidebar' ) && ! is_active_sidebar( 'left-sidebar' ) ) {
  return;
}
?>

<?php get_template_part('templates/section', 'sidebar-right'); ?>
