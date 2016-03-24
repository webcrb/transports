<?php
/**
 * Template Name: Concertation
 */

// the query

?>

<?php get_template_part('templates/menu', 'concertation'); ?>

<?php while (have_posts()) : the_post(); ?>
	<div class="section">
		<div class="jumbotron">
			<h2><small>Consultation sur les horaires 2017 - 2018 </small><br>Donnez votre avis !</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque quibusdam, reprehenderit officiis cum in quasi aliquam dignissimos adipisci ea repellat, sint veniam consectetur dolorum soluta ut maiores, tempore iste pariatur.</p>
			<p><a href="#" class="btn btn-primary">Participez</a></p>
		</div>
	</div>
<!-- 
<div class="section">
  <?php //get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>

</div> -->
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


