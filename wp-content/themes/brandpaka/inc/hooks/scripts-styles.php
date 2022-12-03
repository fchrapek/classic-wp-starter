<?php

namespace Brandpaka;

/**
 * Move jQuery to footer
 */
function move_jquery_into_footer($wp_scripts)
{
  if (! is_admin()) {
    $wp_scripts->add_data('jquery', 'group', 1);
    $wp_scripts->add_data('jquery-core', 'group', 1);
    $wp_scripts->add_data('jquery-migrate', 'group', 1);
  }
}

/**
 * Enqueue scripts and styles.
 */
function enqueue_theme_scripts()
{

  // Enqueue global.css
  wp_enqueue_style(
      'styles',
      get_theme_file_uri(get_asset_file('global.css')),
      [],
      filemtime(get_theme_file_path(get_asset_file('global.css')))
  );

  // Enqueue jquery and front-end.js
  wp_enqueue_script('jquery-core');
  wp_enqueue_script(
      'scripts',
      get_theme_file_uri(get_asset_file('front-end.js')),
      [],
      filemtime(get_theme_file_path(get_asset_file('front-end.js'))),
      true
  );


  // Required comment-reply script
  if (is_singular() && comments_open() && get_option('thread_comments')) {
    wp_enqueue_script('comment-reply');
  }
}

/**
 * Load polyfills for legacy browsers
 */
function enqueue_polyfills()
{
  // Include polyfills
  $script = '
  var supportsES6 = (function () {
  try {
    new Function("(a = 0) => a");
    return true;
  } catch (err) {
    return false;
  }
  }());
  var legacyScript ="' . esc_url(get_theme_file_uri(get_asset_file('legacy.js'))) . '";
  if (!supportsES6) {
    var script = document.createElement("script");
    script.src = legacyScript;
    document.head.appendChild(script);
  }';

  if (file_exists(get_theme_file_path(get_asset_file('legacy.js')))) {
    wp_register_script('brandpaka_legacy', '', [], filemtime(get_theme_file_path(get_asset_file('legacy.js'))), false);
    wp_enqueue_script('brandpaka_legacy');
    wp_add_inline_script('brandpaka_legacy', $script, true);
  }
}

/**
 * Returns the built asset filename and path depending on
 * current environment.
 *
 * @param string $filename File name with the extension
 * @return string file and path of the asset file
 */
function get_asset_file($filename)
{
  $env = 'development' === wp_get_environment_type() && ! isset($_GET['load_production_builds']) ? 'dev' : 'prod';

  $filetype = pathinfo($filename)['extension'];

  return "${filetype}/${env}/${filename}";
}
