<header id="header">
  <div class="load">
    <div class="title">Mo's</div>
    <div class="title">Home</div>
  </div>
  <div class="header-inner">
    <div class="container-fluid">
      <div class="row">
        <div class="logo col-md-3">
          <a href="index.php/home">Mo's Home</a>
        </div>
        <div id="header-nav-wrap" class="header-nav-wrap col-md-9">
          <?php wp_nav_menu(array(
            'theme_location' => 'header-nav',
            'menu_class' => 'row d-flex menu',
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