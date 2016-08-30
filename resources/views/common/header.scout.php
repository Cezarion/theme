<header class="banner">
  <div class="container">
    <a class="brand" href="{{ esc_url(home_url('/')) }}">{{ bloginfo('name') }}</a>
    <nav class="nav-primary">
        @if (has_nav_menu('header-nav'))
            {{ wp_nav_menu([ 'theme_location'  => 'header-nav',
                             'menu'            => 'header-nav',
                             'menu_class'      => 'nav',
                             'container'       => 'div',
                             'container_class' => 'collapse navbar-collapse',
                             'container_id'    => 'bs-example-navbar-collapse-1',
                             'menu_class'      => 'nav navbar-nav',
                             'fallback_cb'     => 'WpBootstrapNavwalker::fallback',
                             'walker'          => new WpBootstrapNavwalker()
                            ]) }}
        @endif
    </nav>
  </div>
</header>