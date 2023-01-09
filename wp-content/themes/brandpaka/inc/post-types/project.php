<?php

namespace Brandpaka;

/**
 * Registers the Your Post Type post type.
 */
class Project extends Post_Type //phpcs:ignore
{
  public function register()
  {
    $generated_labels = [
      'menu_name'          => __('Projects', 'brandpaka'),
      'name'               => _x('Your Post Types', 'post type general name', 'brandpaka'),
      'singular_name'      => _x('Your Post Type', 'post type singular name', 'brandpaka'),
      'name_admin_bar'     => _x('Your Post Type', 'add new on admin bar', 'brandpaka'),
      'add_new'            => _x('Add New', 'thing', 'brandpaka'),
      'add_new_item'       => __('Add New Your Post Type', 'brandpaka'),
      'new_item'           => __('New Your Post Type', 'brandpaka'),
      'edit_item'          => __('Edit Your Post Type', 'brandpaka'),
      'view_item'          => __('View Your Post Type', 'brandpaka'),
      'all_items'          => __('All Your Post Types', 'brandpaka'),
      'search_items'       => __('Search Your Post Types', 'brandpaka'),
      'parent_item_colon'  => __('Parent Your Post Types:', 'brandpaka'),
      'not_found'          => __('No your post types found.', 'brandpaka'),
      'not_found_in_trash' => __('No your post types found in Trash.', 'brandpaka'),
    ];
    $args = [
      'labels'              => $generated_labels,
      'description'         => '',
      'menu_icon'           => null,
      'public'              => false,
      'has_archive'         => false,
      'exclude_from_search' => false,
      'show_ui'             => true,
      'show_in_menu'        => true,
      'show_in_rest'        => false,
      'rewrite'             => [
        'with_front'  => false,
        'slug'        => '[project]',
      ],
      'supports'            => ['title', 'editor', 'thumbnail', 'revisions'],
      'taxonomies'          => [],
    ];

    $this->register_wp_post_type($this->slug, $args);
  }
}
