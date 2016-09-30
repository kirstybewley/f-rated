<?php
if ( ! is_active_sidebar( 'right-sidebar' ) && ! is_active_sidebar( 'left-sidebar' ) ) {
  return;
}
?>

<aside class="sidebar sidebar-left" role="complementary">

	<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('left-sidebar')) ?>

</aside>
