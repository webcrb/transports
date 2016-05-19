<header class="banner">
  <div class="topbar">
      <div class="container">
        <ul class="nav nav-inline text-xs-right">
          <li class="nav-item dropdown">
             <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Les autres sites</a>
              <div class="dropdown-menu" aria-labelledby="sites">
                <a class="dropdown-item" href="http://www.bretagne.bzh">bretagne.bzh</a>
                <a class="dropdown-item" href="http://jeunes.bretagne.bzh">jeunes.bretagne.bzh</a>
                <a class="dropdown-item" href="http://entreprise.bretagne.bzh">entreprise.bretagne.bzh</a>
                <a class="dropdown-item" href="http://mer-littoral.bretagne.bzh">mer-littoral.bretagne.bzh</a>
                <a class="dropdown-item" href="http://europe.bretagne.bzh">europe.bretagne.bzh</a>
              </div>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?php echo wp_login_url(); ?>" title="Login"><i class="icon-sign-in"></i> Se connecter</a>
          </li>

        </ul>
        
      </div>
  </div>
  <nav class="navbar navbar-full menu-bzh hidden-md-down">
    <div class="container">

        <a class="navbar-brand rb" href="http://www.bretagne.bzh">sur bretagne.bzh</a>
        <?php
          if (has_nav_menu('bzh_navigation')) :
            wp_nav_menu(['theme_location' => 'bzh_navigation', 'menu_class' => 'nav navbar-nav']);
          endif;
        ?>
    </div>
  </nav>
  <nav class="navbar navbar-dark bg-inverse navbar-full">
    <div class="container">
      <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="navigation">
        &#9776;
      </button>
      <div class="collapse navbar-toggleable-xs" id="navigation">
        <a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
        <?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav']);
          endif;
        ?>
        <form role="search" class="form-inline pull-xs-right" id="searchform" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
        <label for="s" class="sr-only">Search:</label>  
          <input class="form-control" type="text" placeholder="Rechercher" name="s" id="s" value="<?php echo get_search_query(); ?>">
          <button class="btn btn-secondary sr-only" type="submit">Rechercher</button>
        </form>
      </div>
    </div>
  </nav>

</header>
