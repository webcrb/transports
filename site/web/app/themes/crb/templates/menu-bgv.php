<?php 
$bgv_query = new WP_Query( array( 'page_id' => '14' ) );

if ( $bgv_query->have_posts() ) : ?>

	<!-- pagination here -->
	<nav class="section rubrique bgv">
		<div class="row">


			<!-- the loop -->
			<?php while ( $bgv_query->have_posts() ) : $bgv_query->the_post(); ?>

				<div class="col-lg-8 col-lg-push-4">
					<h2><?php the_title(); ?></h2>
					<?php the_excerpt(); ?>
				</div>
				
			<?php endwhile; ?>
			
			<?php if (has_nav_menu('bgv')) : ?>

				<div class="col-lg-4 col-lg-pull-8 menu">
					<?php wp_nav_menu(['theme_location' => 'bgv', 'menu_class' => 'nav nav-stacked']); ?>
				</div>
				
			<?php endif; ?>
			<!-- end of the loop -->

			<!-- pagination here -->

		</div>
	</nav>

	<?php wp_reset_postdata(); ?>

<?php endif; ?>
