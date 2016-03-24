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
