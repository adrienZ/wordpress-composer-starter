<?php

namespace Theme;

function cpt_project() {
  register_post_type('project', [
      'label' => 'Projet',
      'public' => true,
      'menu_position' => 4,
      'menu_icon' => 'dashicons-edit-large',
      'supports' => ['title', 'editor', 'thumbnail'],
      'show_in_rest' => true,
      'has_archive' => true,
  ]);
}
add_action('init', 'Theme\cpt_project');