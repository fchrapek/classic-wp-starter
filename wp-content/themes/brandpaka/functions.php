<?php

namespace Brandpaka;

define('BRPK_VERSION', '1.0.0');

add_action('after_setup_theme', function () {
  $theme_settings = [
    'textdomain' => 'brandpaka',

    /**
     * Custom setting group settings when using Air setting groups plugin.
     * On multilingual sites using Polylang, translations are handled automatically.
     */
    'custom_settings' => [
      // 'your-custom-setting' => [
      //   'id' => Your custom setting post id,
      //   'title' => 'Your custom setting',
      //   'block-editor' => true,
      //  ],
    ],

    /**
     * Menu locations
     */
    'menu_locations' => [
      'primary' => __('Primary Menu', 'brandpaka'),
    ],

    /**
     * Taxonomies
     *
     * See the instructions:
     * https://github.com/digitoimistodude/brandpaka#custom-taxonomies
     */
    'taxonomies' => [
      // 'your-taxonomy' => [
      //   'name' => 'Your_Taxonomy',
      //   'post_types' => [ 'post', 'page' ],
      // ],
    ],

    /**
     * Post types
     *
     * See the instructions:
     * https://github.com/digitoimistodude/brandpaka#custom-post-types
     */
    'post_types' => [
      'project' => __('Project', 'brandpaka'),
      'service' => __('Service', 'brandpaka'),
    ],

    /**
     * Gutenberg -related settings
     */
    // Register custom ACF Blocks
    'acf_blocks' => [
      [
        'name'           => 'hero',
        'title'          => 'Hero',
      ],
      [
        'name'           => 'big-numbers',
        'title'          => 'Big numbers',
      ],
      [
        'name'           => 'content-image',
        'title'          => 'Content with image',
      ],
      [
        'name'           => 'cta',
        'title'          => 'CTA',
      ],
      [
        'name'           => 'services',
        'title'          => 'Services',
      ],
      [
        'name'           => 'projects',
        'title'          => 'Projects',
      ],
      [
        'name'           => 'contact-form',
        'title'          => 'Contact form',
      ],

      // [
      //   'name'           => 'block-file-slug',
      //   'title'          => 'Block Visible Name',
      //   // You can safely remove lines below if you find no use for them
      //   'prevent_cache'  => false, // Defaults to false,
      //   // Icon defaults to svg file inside svg/block-icons named after the block name,
      //   // eg. svg/block-icons/block-file-slug.svg
      //   //
      //   // Icon setting defines the dashicon equivalent: https://developer.wordpress.org/resource/dashicons/#block-default
      //   // 'icon'  => 'block-default',
      // ],
    ],

    // Custom ACF block default settings
    'acf_block_defaults' => [
      'category'          => 'brpk',
      'mode'              => 'edit',
      'align'             => 'full',
      'post_types'        => [
        'page',
      ],
      'supports'  => [
        'align'           => false,
        'anchor'          => true,
        'customClassName' => false,
      ],
      'render_callback'   => __NAMESPACE__ . '\render_acf_block',
    ],

    // Restrict to only selected blocks
    // Set the value to 'all' to allow all blocks everywhere
    'allowed_blocks' => [
      'default' => [
      ],
      'post' => [
        'core/archives',
        'core/audio',
        'core/buttons',
        'core/categories',
        'core/code',
        'core/column',
        'core/columns',
        'core/coverImage',
        'core/embed',
        'core/file',
        'core/freeform',
        'core/gallery',
        'core/heading',
        'core/html',
        'core/image',
        'core/latestComments',
        'core/latestPosts',
        'core/list',
        'core/more',
        'core/nextpage',
        'core/paragraph',
        'core/preformatted',
        'core/pullquote',
        'core/quote',
        'core/block',
        'core/separator',
        'core/shortcode',
        'core/spacer',
        'core/subhead',
        'core/table',
        'core/textColumns',
        'core/verse',
        'core/video',
      ],
    ],

    // If you want to use classic editor somewhere, define it here
    'use_classic_editor' => [],

    // Add your own settings and use them wherever you need, for example THEME_SETTINGS['my_custom_setting']
    'my_custom_setting' => true,
  ];

  $theme_settings = apply_filters('brandpaka_theme_settings', $theme_settings);

  define('THEME_SETTINGS', $theme_settings);
}); // end action after_setup_theme

/**
 * Required files
 */
require get_theme_file_path('/inc/hooks.php');
require get_theme_file_path('/inc/includes.php');
require get_theme_file_path('/inc/template-tags.php');

// Run theme setup
add_action('init', __NAMESPACE__ . '\theme_setup');
add_action('after_setup_theme', __NAMESPACE__ . '\build_theme_support');
