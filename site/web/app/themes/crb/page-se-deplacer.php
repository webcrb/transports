<?php
/**
 * Template Name: Se déplacer
 */
?>

<nav class="section rubrique">
	<div class="row">
		<?php if (has_nav_menu('se-deplacer')) : ?>
		<div class="col-md-offset-8 col-md-4 menu">
			<?php wp_nav_menu(['theme_location' => 'se-deplacer', 'menu_class' => 'nav nav-stacked']); ?>
		</div>
		<?php endif; ?>
	</div>
</nav>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>
