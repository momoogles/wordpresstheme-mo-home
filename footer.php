<footer id="footer" class="footer">
  <div class="footer-inner">
    <div class="container-fluid">
      <?php if (!(is_front_page())) : ?>
        <div class="link row">
          <div class="nav-wrap col-sm-4 col-xs-12">
            <small>Page Links</small>
            <?php wp_nav_menu(array(
                'theme_location' => 'footer-nav',
                'menu_class' => 'menu',
                'container' => 'nav',
                'container_class' => 'nav',
                'container_id' => 'footer-nav',
                'fallback_cb' => ''
              )); ?>
          </div>
          <div class="attribution-wrap col-sm-8 col-xs-12">
            <small>photo attribution</small>
            <ul class="attribution-menu">
              <li>
                <div>SNS-Icons made by <a class="attribution" href="https://www.freepik.com/free-photos-vectors/logo">saragnzalez - www.freepik.com</a>
              </li>
              <li>
                <div>Button-icons made by <a href="https://www.flaticon.com/authors/freepik" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></div>
              </li>
            </ul>
          </div>
        </div> <?php endif; ?> <div class="row copywrite">
        <small>Copyright © 2019 momoogles</small>
      </div>

    </div>
  </div>
</footer>