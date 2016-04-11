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

<aside class="section">
	<div class="text-xs-center jumbotron">
		<p class="lead">Inscrivez-vous pour recevoir les dernières informations</p>
		<form action="" class="form-inline">
			<div class="form-group">
				<label for="" class="sr-only">email</label>
				<input type="email" class="form-control" placeholder="votre email">
			</div>
			<button type="submit" class="btn btn-primary">S'inscrire</button>
		</form>
	</div>
</aside>


<?php endwhile; ?>


