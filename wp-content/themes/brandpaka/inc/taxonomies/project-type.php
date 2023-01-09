<?php

namespace Brandpaka;

class Project_Type extends Taxonomy //phpcs:ignore
{
  public function register(array $post_types = [])
  {
    $labels = [
      'menu_name'             => __('Project Types', 'brandpaka'),
      'name'                  => _x('Project Types', 'Taxonomy plural name', 'brandpaka'),
      'singular_name'         => _x('Project Type', 'Taxonomy singular name', 'brandpaka'),
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
        'slug' => 'project-type',
      ],
    ];

    $this->register_wp_taxonomy($this->slug, $post_types, $args);
  }
}
