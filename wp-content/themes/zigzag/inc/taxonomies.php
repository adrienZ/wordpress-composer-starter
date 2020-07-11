<?php

namespace Theme;

function taxonomy_location() {
  register_taxonomy('Location', 'post', [
      'labels' => [
          'name' => 'Lieux',
          'singular_name'     => 'Lieu',
          'plural_name'       => 'Lieux',
          'search_items'      => 'Rechercher des Lieux',
          'all_items'         => 'Tous les Lieux',
          'edit_item'         => 'Editer le Lieu',
          'update_item'       => 'Mettre à jour le lieu',
          'add_new_item'      => 'Ajouter un nouveau lieu',
          'new_item_name'     => 'Ajouter un nouveau lieu',
          'menu_name'         => 'Lieux',
      ],
      // in api ?
      'show_in_rest' => true,
      'hierarchical' => true,
      'show_admin_column' => true,
  ]);
}
add_action('init', 'Theme\taxonomy_location');