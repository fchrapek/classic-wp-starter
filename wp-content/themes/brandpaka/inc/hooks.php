<?php

namespace Brandpaka;

 // General hooks
require get_theme_file_path('inc/hooks/general.php');
add_action('widgets_init', __NAMESPACE__ . '\widgets_init');
add_action('upload_mimes', __NAMESPACE__ . '\custom_mime_types');

// Scripts and styles associated hooks
require get_theme_file_path('inc/hooks/scripts-styles.php');
add_action('wp_enqueue_scripts', __NAMESPACE__ . '\enqueue_polyfills');
add_action('wp_enqueue_scripts', __NAMESPACE__ . '\enqueue_theme_scripts');

// NB! If you use ajax functionality in Gravity Forms, remove this line
// to prevent Uncaught ReferenceError: jQuery is not defined
add_action('wp_default_scripts', __NAMESPACE__ . '\move_jquery_into_footer');

// Gutenberg associated hooks
require get_theme_file_path('inc/hooks/gutenberg.php');
add_filter('allowed_block_types_all', __NAMESPACE__ . '\allowed_block_types', 10, 2);
add_filter('use_block_editor_for_post_type', __NAMESPACE__ . '\use_block_editor_for_post_type', 10, 2);
add_action('enqueue_block_editor_assets', __NAMESPACE__ . '\register_block_editor_assets');
add_filter('block_editor_settings_all', __NAMESPACE__ . '\remove_gutenberg_inline_styles', 10, 2);
add_action('after_setup_theme', __NAMESPACE__ . '\setup_editor_styles');
add_action('enqueue_block_editor_assets', __NAMESPACE__ . '\block_editor_title_input_styles');

// ACF
require get_theme_file_path('inc/hooks/acf-options.php');
require get_theme_file_path('inc/hooks/acf-blocks.php');
add_filter('block_categories_all', __NAMESPACE__ . '\acf_blocks_add_category_in_gutenberg', 10, 2);
add_action('acf/init', __NAMESPACE__ . '\acf_blocks_init');

// Form related hooks
require get_theme_file_path('inc/hooks/forms.php');
add_filter('wpcf7_autop_or_not', '__return_false');
// add_action('wp_enqueue_scripts', __NAMESPACE__ . '\conditional_dequeue_cf7', 999);

// Blog helpers
require get_theme_file_path('inc/hooks/blog-helpers.php');
add_action('pre_get_posts', __NAMESPACE__ . '\exclude_sticky_from_blog');
