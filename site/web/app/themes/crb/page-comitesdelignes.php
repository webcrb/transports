<?php
/**
 * Template Name: Comités de lignes
 */

// the query
$actus = new WP_Query( array( 'posts_per_page' => 2, 'category_name' => 'comites-de-lignes' ) );

$args = array(
    'post_type'      => 'page',
    'posts_per_page' => -1,
    'post_parent'    => $post->ID,
    'order'          => 'ASC',
    'orderby'        => 'menu_order'
 );
$parent = new WP_Query( $args );
?>

<?php get_template_part('templates/menu', 'concertation'); ?>

<div class="section row">
	<div class="col-md-8">
	<?php while (have_posts()) : the_post(); ?>
	  <?php get_template_part('templates/page', 'header'); ?>
	  <?php get_template_part('templates/content', 'page'); ?>
	<?php endwhile; ?>

	<?php if ( $parent->have_posts() ) : ?>
		<div id="accordion" role="tablist" aria-multiselectable="true">

		    <?php while ( $parent->have_posts() ) : $parent->the_post(); ?>

		        <div id="parent-<?php the_ID(); ?>" class="parent-page panel panel-default">
		        	<div class="panel-heading" role="tab" id="heading-<?php the_ID(); ?>">

		            	<h2 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" aria-expanded="true" aria-controls="page-<?php the_ID(); ?>" href="#page-<?php the_ID(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>

		            </div>

		            <div id="page-<?php the_ID(); ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-<?php the_ID(); ?>">
				      <?php get_template_part('templates/content', 'page'); ?>
				    </div>

		        </div>

		    <?php endwhile; ?>

		</div> <!-- accordion -->

	<?php endif; wp_reset_query(); ?>

	</div> <!-- contenu -->
	
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

	</div><!-- sidebar -->

	<?php wp_reset_postdata(); ?>

	<?php endif; ?>

	
</div>



