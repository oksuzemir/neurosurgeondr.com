<?php /* Template Name: Basın Sayfası */ get_header(); ?>

	<main role="main" class="konten">
	<h1 class="front-title m-30"><?php the_title(); ?></h1>
		<!-- section -->
		<section>
            <div class="konten">
                <div class="basin-grid">
                    <?php dynamic_sidebar('widget-area-2'); ?> 
                </div>
                    
            </div>
		</section>
		<div class="yuksek"></div>
	</main>


<?php get_footer(); ?>
