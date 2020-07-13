<?php

namespace Theme;

function my_theme_supports() {
  // remove the <title> tag in your header before adding this
  add_theme_support('title-tag');

  // post thumbnails
  add_theme_support('post-thumbnails'); // can tell wich type to add in second argument (post, etc...)

  add_theme_support('custom-logo');
  add_theme_support('html5');

  // rss
  add_theme_support( 'automatic-feed-links' );

  // editable menus
  add_theme_support('menus');
  register_nav_menu('Header', 'Menu principal');
}

add_action('after_setup_theme', 'Theme\my_theme_supports');