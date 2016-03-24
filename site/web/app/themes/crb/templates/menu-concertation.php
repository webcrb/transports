<nav class="section rubrique">
	<div class="row">
		<?php if (has_nav_menu('concertation')) : ?>
		<div class="col-md-offset-8 col-md-4 menu">
			<?php wp_nav_menu(['theme_location' => 'concertation', 'menu_class' => 'nav nav-stacked']); ?>
		</div>
		<?php endif; ?>
	</div>
</nav>