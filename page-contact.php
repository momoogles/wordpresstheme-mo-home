<?php get_header("head") ?>

<div id="contact">
  <?php get_header() ?>
  <main class="contact-inner container-fluid">
    <h1 class="title">Hello Contact!</h1>
    <section class="sns-contact container-fluid">
      <h2 class="type">SNS</h2>
      <div class="row">
        <div class="sns-img-wrap col-md-2 col-3">
          <img class="sns-img" src="<?php bloginfo('template_url'); ?>/images/icon_twitter.png" width="50px" height="50px" />
        </div>
        <div class="sns-id-wrap col-md-10 col-9">
          <span>@momoogles</span>
        </div>
      </div>
      <div class="row">
        <div class="sns-img-wrap col-md-2 col-3">
          <img class="sns-img" src="<?php bloginfo('template_url'); ?>/images/icon_instagram.png" width="50px" height="50px" />
        </div>
        <div class="sns-id-wrap col-md-10 col-9">
          <span>非公開</span>
        </div>
      </div>
    </section>
    <section class="e-mail-contact container-fluid">
      <h2 class="type">E-mail</h2>
      <div class="row">
        <div class="e-mail-img-wrap col-md-2 col-3">
          <img class="e-mail-img" src="<?php bloginfo('template_url'); ?>/images/icon_google.png" width="50px" height="50px" />
        </div>
        <div class="e-mail-addres-wrap col-md-10 col-9">
          <span>mo1419091@gmail.com</span>
        </div>
      </div>
    </section>
  </main>
  <?php get_footer() ?>
</div>

<?php get_footer("script") ?>