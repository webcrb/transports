<?php
/**
 * Template Name: BGV
 */

// the query
$actus = new WP_Query( array( 'posts_per_page' => 3, 'category_name' => 'bgv' ) );

?>

<?php get_template_part('templates/menu', 'bgv'); ?>

<?php while (have_posts()) : the_post(); ?>

<?php if ( $actus->have_posts() ) : ?>
	<!-- pagination here -->
	
	<div class="section">
		<h2>Les actualités</h2>
		<div class="row">
			
			<!-- the loop -->
			<?php while ( $actus->have_posts() ) : $actus->the_post(); ?>
	  			<div class="col-md-4">
	  				<?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
	  			</div>
			<?php endwhile; ?>
			<!-- end of the loop -->

		</div>
	</div>

	<!-- pagination here -->

	<?php wp_reset_postdata(); ?>
<?php endif; ?>

<div class="section text-xs-center jumbotron">
	<p class="lead">Inscrivez-vous pour recevoir les dernières informations</p>
	<form action="" class="form-inline">
		<div class="form-group">
			<label for="" class="sr-only">email</label>
			<input type="email" class="form-control" placeholder="votre email">
		</div>
		<button type="submit" class="btn btn-primary">S'inscrire</button>
	</form>
</div>


<div class="section">
  <?php //get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>
</div>
