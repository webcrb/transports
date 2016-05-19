<?php
/**
 * Template Name: Page accueil
 */

// the query
$actus = new WP_Query( array( 'posts_per_page' => 3 ) );
?>


<?php while (have_posts()) : the_post(); ?>
  <!-- <h1><?php bloginfo('description'); ?></h1>
  <div class="row">
  	<div class="col-md-6"><?php get_template_part('templates/content', 'page'); ?></div>
  </div> -->
  
<?php endwhile; ?>

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
		<p class="text-xs-right"><i class="icon-plus"></i>  <a href="<?php bloginfo('url'); ?>/actualites">Toutes les actualités</a></p>
	</div>

	<!-- pagination here -->

	<?php wp_reset_postdata(); ?>
<?php endif; ?>

<?php get_template_part('templates/menu', 'bgv'); ?>
<?php get_template_part('templates/menu', 'sedeplacer'); ?>

<?php get_template_part('templates/inscription', 'newsletter'); ?>

<?php get_template_part('templates/section', 'videos'); ?>

