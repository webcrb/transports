<header class="banner">
  <div class="topbar text-xs-right">
      <div class="container">
        <ul class="nav nav-inline">
          <li class="nav-item"><a href="#" class="nav-link">menuitem</a></li>
          <li class="nav-item"><a href="#" class="nav-link">menuitem</a></li>
          <li class="nav-item"><a href="#" class="nav-link">menuitem</a></li>
        </ul>
      </div>
  </div>
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
          <form class="form-inline pull-xs-right">
            <input class="form-control" type="text" placeholder="Search">
            <button class="btn btn-primary-outline" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>
</header>
