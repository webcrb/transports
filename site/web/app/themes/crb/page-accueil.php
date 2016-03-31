<?php
/**
 * Template Name: Page accueil
 */

// the query
$actus = new WP_Query( array( 'posts_per_page' => 3 ) );
?>

<div class="section">
<?php while (have_posts()) : the_post(); ?>
  <?php //get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>
</div>
<hr>

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

<div class="rubrique rub1">
	<h2>Se déplacer</h2>
	<div class="row">
		<div class="col-md-8">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus voluptas recusandae, eum architecto cupiditate distinctio saepe. Saepe ad officiis quas provident? Quae cupiditate hic reiciendis, commodi debitis voluptatem sunt id.</p>
		</div>
		<?php if (has_nav_menu('se-deplacer')) : ?>
		<div class="col-md-4 menu">
			<?php wp_nav_menu(['theme_location' => 'se-deplacer', 'menu_class' => 'nav nav-stacked']); ?>
		</div>
		<?php endif; ?>
	</div>
</div>

<div class="rubrique rub2">
	<h2>Bretagne Grand Vitesse</h2>
	<div class="row">
		<?php if (has_nav_menu('bgv')) : ?>
		<div class="col-md-4 menu">
			<?php wp_nav_menu(['theme_location' => 'bgv', 'menu_class' => 'nav nav-stacked']); ?>
		</div>
		<?php endif; ?>
		<div class="col-md-8">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima quos fuga, cumque cum eligendi odio magni soluta quis earum nam hic ut reprehenderit rem, animi porro sunt. Quae, vel, debitis!</p>
		</div>
	</div>
</div>

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
	<div class="row">
		<div class="col-md-4"><img src="https://unsplash.it/800/450" alt="vidéo" class="img-fluid"></div>
		<div class="col-md-4"><img src="https://unsplash.it/801/450" alt="vidéo" class="img-fluid"></div>
		<div class="col-md-4"><img src="https://unsplash.it/802/450" alt="vidéo" class="img-fluid"></div>
	</div>
</div>
