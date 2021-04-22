<header class="vert-menu">
    <img src="@asset('images/logo.svg')" alt="Corentin Deleuse Logo">

    <nav class="nav-primary" id="menu">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
    </nav>

</header>
