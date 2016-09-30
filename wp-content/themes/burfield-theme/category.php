<?php get_header(); ?>

<!--  main -->
<main role="main">
	<!-- section -->
	<section>

		<h1><?php _e( 'Categories for ', 'burfield' ); single_cat_title(); ?></h1>

		<?php get_template_part('loop'); ?>

		<?php get_template_part('pagination'); ?>

	</section>
	<!-- /section -->
</main>
<!-- /main -->

<?php get_footer(); ?>
