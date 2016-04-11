<?php
/**
 * Template Name: Iframe
 */
?>
<?php while (have_posts()) : the_post(); ?>
	<iframe src="<?php the_field('url'); ?>" width="100%" height="1000" frameborder="0"></iframe>
<?php endwhile; ?>
