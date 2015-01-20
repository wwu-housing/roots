<header class="container">
  <?php get_template_part('templates/wwu-header'); ?>

  <div id="ur-head-container" role="banner">
    <div id="ur-title" class="page-header {% block title_styles %}with-slider{% endblock %}">
      <h1><a href="<?php echo esc_url(home_url('/')); ?>">
        <span class="pull-left home-icon col-md-offset-0 col-sm-offset-4 hidden-xs glyphicon glyphicon-home"></span>
        <?php bloginfo('name'); ?>
      </a></h1>
    </div>
    <div id="slider">
      <img src="http://placehold.it/1170x180" alt="Edens Hall South Wall">
    </div>
  </div>
</header>
