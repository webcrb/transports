<?php
/**
 * Template Name: Concertation
 */

// the query

?>

<?php get_template_part('templates/menu', 'concertation'); ?>

<?php while (have_posts()) : the_post(); ?>

	<?php if ( get_field('ad-title')  ) : ?>

	<div class="section">
		<div class="acces-direct">
			<h2><small>Consultation sur les horaires 2017 - 2018 </small><br><?php the_field('ad-title') ?></h2>
			<?php if( get_field('ad-text') ) { echo'</p>' . get_field('ad-text') . '</p>'; }  ?>
			<p><a href="<?php the_field('ad-link'); ?>" class="btn btn-primary">Accéder</a></p>
		</div>
	</div>

	<?php endif; ?>

<?php get_template_part('templates/inscription', 'newsletter'); ?>


<?php endwhile; ?>


