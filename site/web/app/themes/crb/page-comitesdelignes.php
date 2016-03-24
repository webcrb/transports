<?php
/**
 * Template Name: Comités de lignes
 */

// the query
$actus = new WP_Query( array( 'category_name' => 'comites-de-lignes' ) );

?>

<?php get_template_part('templates/menu', 'concertation'); ?>

<div class="section row">
	<div class="col-md-8">
	<?php while (have_posts()) : the_post(); ?>
	  <?php get_template_part('templates/page', 'header'); ?>
	  <?php get_template_part('templates/content', 'page'); ?>
	<?php endwhile; ?>
	</div>
	<?php if ( $actus->have_posts() ) : ?>
	<!-- pagination here -->
	
	<div class="col-md-4">
		<h2>Les actualités</h2>
			
			<!-- the loop -->
			<?php while ( $actus->have_posts() ) : $actus->the_post(); ?>

	  		<?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>

	  		<hr>

			<?php endwhile; ?>
			<!-- end of the loop -->

		</div>
	</div>

	<!-- pagination here -->

	<?php wp_reset_postdata(); ?>

<?php endif; ?>
</div>



