<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <div class="load">
    <div class="title">Mo's</div>
    <div class="title">Home</div>
  </div>
  <header>
    <div class="header-inner">
      <div class="container">
        <div class="row">
          <div class="name col-md-3">
            <a href="index.html">Mo's Home</a>
          </div>
          <div id="header-nav-wrap" class="header-nav-wrap col-md-9">
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
</body>

<script>
  setTimeout(() => {
    document.querySelectorAll(".load .title").forEach(element => element.classList.add("isActive"))
  }, 200);
  setTimeout(() => {
    document.querySelector(".load").classList.add("isLoaded")
  }, 1000);
</script>

</html>