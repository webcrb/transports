<footer class="content-info">
  <div class="container">
  	<hr>
    <?php 
    	if ( has_nav_menu( 'footer' ) ) {
    		wp_nav_menu(['theme_location' => 'footer', 'menu_class' => 'nav nav-inline']);
    	}
    ?>
  </div>
</footer>
