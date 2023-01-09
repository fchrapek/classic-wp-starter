<?php

namespace Brandpaka;

class Your_Taxonomy extends Taxonomy //phpcs:ignore
{
  public function register(array $post_types = [])
  {
    $labels = [
      'name'                  => _x('Your Taxonomies', 'Taxonomy plural name', 'brandpaka'),
      'singular_name'         => _x('Your Taxonomy', 'Taxonomy singular name', 'brandpaka'),
      'search_items'          => __('Search Your Taxonomies', 'brandpaka'),
      'popular_items'         => __('Popular Your Taxonomies', 'brandpaka'),
      'all_items'             => __('All Your Taxonomies', 'brandpaka'),
      'parent_item'           => __('Parent Your Taxonomy', 'brandpaka'),
      'parent_item_colon'     => __('Parent Your Taxonomy', 'brandpaka'),
      'edit_item'             => __('Edit Your Taxonomy', 'brandpaka'),
      'update_item'           => __('Update Your Taxonomy', 'brandpaka'),
      'add_new_item'          => __('Add New Your Taxonomy', 'brandpaka'),
      'new_item_name'         => __('New Your Taxonomy', 'brandpaka'),
      'add_or_remove_items'   => __('Add or remove Your Taxonomies', 'brandpaka'),
      'choose_from_most_used' => __('Choose from most used Taxonomies', 'brandpaka'),
      'menu_name'             => __('Your Taxonomy', 'brandpaka'),
    ];

    $args = [
      'labels'            => $labels,
      'public'            => false,
      'show_in_nav_menus' => true,
      'show_admin_column' => true,
      'hierarchical'      => true,
      'show_tagcloud'     => false,
      'show_ui'           => true,
      'query_var'         => false,
      'rewrite'           => [
        'slug' => 'your-taxonomy',
      ],
    ];

    $this->register_wp_taxonomy($this->slug, $post_types, $args);
  }
}
