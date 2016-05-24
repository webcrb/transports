<?php 
$sedeplacer_query = new WP_Query( array( 'page_id' => '29' ) );

if ( $sedeplacer_query->have_posts() ) : ?>

	<!-- pagination here -->
	<nav class="section rubrique concertation">
		<div class="row">

		<!-- the loop -->
		<?php while ( $sedeplacer_query->have_posts() ) : $sedeplacer_query->the_post(); ?>

			<div class="col-lg-8">
				<h2><?php the_title(); ?></h2>
				<?php the_excerpt(); ?>
			</div>
			
		<?php endwhile; ?>
		<!-- end of the loop -->

		<!-- pagination here -->
		<?php if (has_nav_menu('concertation')) : ?>

			<div class="col-lg-4 menu">
				<?php wp_nav_menu(['theme_location' => 'concertation', 'menu_class' => 'nav nav-stacked']); ?>
			</div>
			
		<?php endif; ?>
			</div>
	</nav>

	<?php wp_reset_postdata(); ?>

<?php endif; ?>


		
