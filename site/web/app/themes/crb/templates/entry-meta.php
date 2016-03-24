<?php if(is_single()) : ?>
	<p><time class="updated" datetime="<?= get_post_time('c', true); ?>"><?= get_the_date(); ?></time></p>
<?php endif; ?>
<p><?php the_tags( '<i class="icon-tags"></i> ', ' • ', '<br />' ); ?></p>
