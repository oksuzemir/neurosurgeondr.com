<?php get_header(); ?>

	<main role="main" class="konten">
		<section>

			<h1 class="front-title m-50"><?php echo sprintf( __( '%s Search Results for ', 'html5blank' ), $wp_query->found_posts ); echo get_search_query(); ?></h1>
			<div class="fifth-blog">
			<?php get_template_part('loop'); ?>
			</div>
		</section>
	</main>


<?php get_footer(); ?>
