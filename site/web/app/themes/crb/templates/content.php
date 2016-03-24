<article <?php post_class(); ?>>
	<?php if ( has_post_thumbnail()) : ?>
   		<p><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" ><?php the_post_thumbnail('thumbnail', array('class' => 'img-fluid img-thumbnail')); ?></a></p>
 	<?php endif; ?>
	<header>
		<h3 class="entry-title h4"><?php the_title(); ?></a></h3>
		<?php get_template_part('templates/entry-meta'); ?>
	</header>
	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div>
</article>
