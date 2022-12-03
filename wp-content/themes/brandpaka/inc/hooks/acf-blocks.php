<?php

namespace Brandpaka;

function acf_blocks_add_category_in_gutenberg($categories, $post)
{
  return array_merge($categories, [
    [
      'slug'  => 'brandpaka',
      'title' => __('Theme blocks', 'brandpaka'),
    ],
  ]);
}

function acf_blocks_init()
{
  if (! function_exists('acf_register_block_type')) {
    return;
  }

  if (! isset(THEME_SETTINGS['acf_blocks'])) {
    return;
  }

  $example_data = apply_filters('air_acf_blocks_example_data', []);

  foreach (THEME_SETTINGS['acf_blocks'] as $block) {
    // Check if we have added example data via hook
    if (empty($block['example']) && ! empty($example_data[ $block['name'] ])) {
      $block['example'] = [
        'attributes' => [
          'mode' => 'preview',
          'data' => $example_data[ $block['name'] ],
        ],
      ];
    }

    // Check if icon is set, otherwise try to load svg icon
    if (! isset($block['icon']) || empty($block['icon'])) {
      $icon_path = get_theme_file_path("svg/block-icons/{$block['name']}.svg");
      $icon_path = apply_filters('brandpaka_acf_block_icon', $icon_path, $block['name'], $block);

      if (file_exists($icon_path)) {
        $block['icon'] = get_acf_block_icon_str($icon_path);
      }
    }

    acf_register_block_type(wp_parse_args($block, THEME_SETTINGS['acf_block_defaults']));
  }
}

/**
 * Thank you WordPress.org theme repository for not allowing
 * file_get_contents even for local files.
 */
function get_acf_block_icon_str($icon_path)
{
  if (! file_exists($icon_path)) {
    return;
  }

  ob_start();
  include $icon_path;
  return ob_get_clean();
}
