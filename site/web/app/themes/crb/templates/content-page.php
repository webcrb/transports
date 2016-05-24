<div class="contenu">
	<?php if (has_post_thumbnail() ) : ?>
		<p><?php the_post_thumbnail('large', array('class' => 'img-fluid img-thumbnail')); ?></p>
	<?php endif; ?>
	<?php the_content(); ?>
</div>
<?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
