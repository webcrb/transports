<?php 

$videos = get_field('videos');

if( $videos ): ?>
	
	<?php if(is_front_page()) : ?>
	<div class="section">
		<div class="row">
	    <?php foreach( $videos as $post): // variable must be called $post (IMPORTANT) ?>
	        <?php setup_postdata($post); ?>
	        <div class="col-md-4">
	        	<p class="embed-responsive embed-responsive-16by9">
	            <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/<?php the_field('videoId') ?>?color=ffffff&&title=0&byline=0&portrait=0" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
	            </p>
	            <h2 class="h4"><?php the_title(); ?></h2>
	            <p><?php the_excerpt(); ?></p>
	        </div>
	    <?php endforeach; ?>
		</div>
	</div>

	<?php else : ?>

	<div class="col-md-4">
	    <?php foreach( $videos as $post): // variable must be called $post (IMPORTANT) ?>
	        <?php setup_postdata($post); ?>
	        <aside>
	        	<p class="embed-responsive embed-responsive-16by9">
	            <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/<?php the_field('videoId') ?>?color=ffffff&&title=0&byline=0&portrait=0" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
	            </p>
	            <h2 class="h4"><?php the_title(); ?></h2>
	            <p><?php the_excerpt(); ?></p>
	        </aside>
	    <?php endforeach; ?>
	</div>

	<?php endif; ?>

    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>

<?php endif; ?>