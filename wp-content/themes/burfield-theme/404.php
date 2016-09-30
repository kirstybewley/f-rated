<?php get_header(); ?>

<!--  main -->
<main role="main">
	<!-- section -->
	<section>

		<!-- article -->
		<article id="post-404">

			<h1><?php _e( 'Page not found', 'burfield' ); ?></h1>
			<h2>
				<a href="<?php echo home_url(); ?>"><?php _e( 'Return home?', 'burfield' ); ?></a>
			</h2>

		</article>
		<!-- /article -->

	</section>
	<!-- /section -->
</main>
<!-- /main -->

<?php get_footer(); ?>
