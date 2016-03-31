<?php
/**
 * Template Name: Se déplacer
 */
?>

<?php get_template_part('templates/menu', 'sedeplacer'); ?>

<?php while (have_posts()) : the_post(); ?>
	<div class="row">
		<div class="col-md-4">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam, aspernatur enim, accusantium quam sint quibusdam dignissimos, eius delectus amet fuga voluptas similique quasi necessitatibus iure dolore non ipsam illo facilis!</p>
		</div>
		<div class="col-md-4">
			<p>Laboriosam a quas dolores sapiente repellendus ratione, harum explicabo nihil ea provident distinctio repellat, illo magnam cupiditate tenetur possimus sequi iste laborum nisi aliquid incidunt magni nobis numquam enim! Nobis.</p>
		</div>
		<div class="col-md-4">
			<p>Atque neque, illo, consequatur, et quae laudantium accusamus ipsam asperiores impedit eveniet, excepturi nobis at. Dicta voluptas labore, aliquam. Sit saepe pariatur magni animi vel beatae itaque dolore minima laudantium.</p>
		</div>
	</div>
	<div class="col-md-4">
		<h2>Animations culturelles</h2>
		<p><img src="https://unsplash.it/800/800?random" alt="" class="img-fluid"></p>	
	</div>
	<div class="col-md-8">
		<h2>Breizhgo</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit odio vero, nemo et sequi at totam asperiores, dicta minima a pariatur nostrum, sed consequuntur! Iure maiores quaerat, aperiam numquam quos.</p>
	</div>
<?php endwhile; ?>
