<?php

add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
add_theme_support('post-thumbnails');

register_nav_menu('header-nav',  ' ヘッダーナビゲーション ');
register_nav_menu('footer-nav',  ' フッターナビゲーション ');

// add_filter('show_admin_bar', '__return_false');
