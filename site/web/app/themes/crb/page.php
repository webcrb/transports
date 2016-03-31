<?php 
$args = array(
    'post_type'      => 'page',
    'posts_per_page' => -1,
    'post_parent'    => $post->ID,
    'order'          => 'ASC',
    'orderby'        => 'menu_order'
 );


$parent = new WP_Query( $args );

?>

<?php if($post->post_parent == '6'): ?>
	<?php get_template_part('templates/menu', 'sedeplacer'); ?>
<?php endif; ?>
<?php if($post->post_parent == '14'): ?>
	<?php get_template_part('templates/menu', 'bgv'); ?>
<?php endif; ?>
<?php if($post->post_parent == '29'): ?>
	<?php get_template_part('templates/menu', 'concertation'); ?>
<?php endif; ?>

<div class="section row">
	<div class="col-md-8">
	<?php while (have_posts()) : the_post(); ?>
	  <?php get_template_part('templates/page', 'header'); ?>
	  <?php get_template_part('templates/content', 'page'); ?>
	<?php endwhile; ?>
	</div>
</div>

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