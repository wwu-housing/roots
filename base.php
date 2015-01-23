<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?>>
  <!--[if lt IE 8]>
    <div class="alert alert-warning">
      <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'roots'); ?>
    </div>
  <![endif]-->

  <?php
    do_action('get_header');
    get_template_part('templates/header');
  ?>

  <?php get_template_part('templates/navigation'); ?>

  <div tabindex="0" id="body-container" class="container">
    <section class="row">
      <article class="col-sm-<?php if (roots_display_sidebar()) : ?>9<?php else: ?>12<?php endif; ?>"
          id="main" role="article" aria-live="polite" aria-atomic="true" role="main">
        <?php include roots_template_path(); ?>
      </article>

      <?php if (roots_display_sidebar()) : ?>
        <aside id="right-sidebar" role="complementary"
          class="col-sm-3">
          <?php include roots_sidebar_path(); ?>
        </aside>
      <?php endif; ?>
    </section>
  </div>

  <?php get_template_part('templates/footer'); ?>

  <?php wp_footer(); ?>
</body>
</html>
