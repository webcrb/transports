<?php
/**
 * Template Name: Page accueil
 */
?>
<div class="section">
<?php while (have_posts()) : the_post(); ?>
  <?php //get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>
</div>
<hr>
<div class="section">
	<h2>Les actus</h2>
	<div class="row">
		<div class="col-md-4">
			<p><img src="https://unsplash.it/800/450?random" alt="" class="img-fluid img-thumbnail"></p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure rerum nulla tenetur in accusamus reprehenderit odit sapiente vel, quas minima et atque soluta veritatis corporis consequuntur? Fugit, fugiat aliquid quaerat.</p>
			<p><a href="#">Lire &rarr; </a></p>
		</div>
		<div class="col-md-4">
			<p><img src="https://unsplash.it/801/450?random" alt="" class="img-fluid img-thumbnail"></p>
			<p>Laboriosam ratione, ipsam placeat. Vero officia, minima nesciunt doloribus provident excepturi minus consequuntur ipsa natus explicabo perferendis aliquid placeat, fugiat nostrum, quo quos ratione praesentium accusantium dignissimos. Repellendus, nihil, voluptas.</p>
			<p><a href="#">Lire &rarr; </a></p>
		</div>
		<div class="col-md-4">
			<p><img src="https://unsplash.it/802/450?random" alt="" class="img-fluid img-thumbnail"></p>
			<p>Distinctio animi reprehenderit soluta veniam sequi qui asperiores, blanditiis dolorem porro. Nam accusantium pariatur neque aspernatur blanditiis maiores quas doloribus, iure minus, ipsa debitis eius sequi, iste magni quod fuga.</p>
			<p><a href="#">Lire &rarr; </a></p>
		</div>
	</div>
</div>

<div class="rubrique">
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

<div class="rubrique">
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
