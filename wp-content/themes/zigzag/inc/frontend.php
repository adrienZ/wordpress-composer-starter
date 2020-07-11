<?php

namespace Theme;

/*
  * when registering a file :
  * id, src, dependecies, version, isInFooter
  *
  */

function my_theme_assets() {
  // SCRIPTS
  wp_register_script('jquery', 'https://code.jquery.com/jquery-3.5.1.min.js', [], false, true);
  wp_enqueue_script('jquery');

  // STYLES
  wp_register_style('bootstrap4', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css', [], false, true);
  wp_enqueue_style('bootstrap4');
}

add_action('wp_enqueue_scripts', 'Theme\my_theme_assets');