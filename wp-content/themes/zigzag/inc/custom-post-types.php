<?php

namespace Theme;

function cpt_project() {
  register_post_type('project', [
      'label' => 'Projet',
      'public' => true,
      'menu_position' => 3,
      'menu_icon' => 'dashicons-building',
      'supports' => ['title', 'editor', 'thumbnail'],
      'show_in_rest' => true,
      'has_archive' => true,
  ]);
}
add_action('init', 'Theme\cpt_project');