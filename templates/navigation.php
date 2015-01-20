<div id="main-nav-container">
    <button id="ur-vent" type="button" class="navbar-toggle btn-ur" data-toggle="collapse" data-target="#main-nav">
        <span class="sr-only">Toggle main navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <nav id="main-nav" class="container collapse {% block nav_collapse %}in{% endblock %}">
        <span class="sr-only visible-xs">Use enter and backspace to navigate between menu levels, tab and shift+tab to navigate between items in a level</span>
        <button class="back btn btn-ur disabled visible-xs"><span class="sr-only">Back</span><i class="glyphicon glyphicon-arrow-left glyphicon glyphicon-white"></i></button>
        <div id="ur-nav" class="row nav-primary" role="navigation">
        <?php
            if (has_nav_menu('primary_navigation')) :
                wp_nav_menu(array('theme_location' => 'primary_navigation', 'walker' => new Roots_Nav_Walker(), 'menu_class' => 'nav navbar-nav'));
            endif;
        ?>
        </div>
    </nav>
</div>
