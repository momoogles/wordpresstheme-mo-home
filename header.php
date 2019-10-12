<header id="header" class="header">
  <?php if (is_front_page()) : ?>
    <div class="load">
      <div class="title-wrap row">
        <span class="title">Mo's</span>
        <span class="title">Home</span>
      </div>
    </div>
  <?php endif; ?>
  <div class="header-inner">
    <div class="container-fluid">
      <div class="row">
        <div class="logo-wrap col-md-3 col-sm-12 col-xs-12">
          <a class="logo" href="index.php/home">Mo's Home</a>
        </div>
        <div class="nav-btn-wrap">
          <button class="nav-btn"><img src="<?php bloginfo('template_url'); ?>/images/icon_web_link.svg" width="40px" /></button>
        </div>
        <div class="nav-wrap col-md-9">
          <?php wp_nav_menu(array(
            'theme_location' => 'header-nav',
            'menu_class' => 'row menu',
            'container' => 'nav',
            'container_class' => 'nav',
            'container_id' => 'header-nav',
            'fallback_cb' => ''
          )); ?>
        </div>
      </div>
    </div>
  </div>
</header>