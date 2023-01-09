<?php

namespace Brandpaka;

// add_filter('air_helper_pll_register_strings', function () {
//   $strings = [
//     // 'Key: String' => 'String',
//   ];

//   /**
//    * Uncomment if you need to have default brandpaka accessibility strings
//    * translatable via Polylang string translations.
//    */
//   // foreach ( get_default_localization_strings() as $key => $value ) {
//   // $strings[ "Accessibility: {$key}" ] = $value;
//   // }

//   return $strings;
// });

function get_default_localization_strings($language = 'pl')
{
  $strings = [
    'en'  => [
      'Add a menu'                                   => __('Add a menu', 'brandpaka'),
      'Open main menu'                               => __('Open main menu', 'brandpaka'),
      'Close main menu'                              => __('Close main menu', 'brandpaka'),
      'Main navigation'                              => __('Main navigation', 'brandpaka'),
      'Back to top'                                  => __('Back to top', 'brandpaka'),
      'Open child menu'                              => __('Open child menu', 'brandpaka'),
      'Open child menu for'                          => __('Open child menu for', 'brandpaka'),
      'Close child menu'                             => __('Close child menu', 'brandpaka'),
      'Close child menu for'                         => __('Close child menu for', 'brandpaka'),
      'Skip to content'                              => __('Przejdź do treści', 'brandpaka'),
      'External site'                                => __('External site', 'brandpaka'),
      'opens in a new window'                        => __('opens in a new window', 'brandpaka'),
      'Page not found.'                              => __('Page not found.', 'brandpaka'),
      'The reason might be mistyped or expired URL.' => __('The reason might be mistyped or expired URL.', 'brandpaka'),
      'Search'                                       => __('Search', 'brandpaka'),
      'Block missing required data'                  => __('Block missing required data', 'brandpaka'),
      'This error is shown only for logged in users' => __('This error is shown only for logged in users', 'brandpaka'),
      'No results found for your search'             => __('No results found for your search', 'brandpaka'),
      'Edit'                                         => __('Edit', 'brandpaka'),
    ],
  ];

  return (array_key_exists($language, $strings)) ? $strings[ $language ] : $strings['en'];
}

function get_default_localization($string)
{
  if (function_exists('ask__') && array_key_exists("Accessibility: {$string}", apply_filters('air_helper_pll_register_strings', []))) {
    return ask__("Accessibility: {$string}");
  }

  return esc_html(get_default_localization_translation($string));
}
function get_default_localization_translation($string)
{
  $language = get_bloginfo('language');
  if (function_exists('pll_the_languages')) {
    $language = pll_current_language();
  }

  $translations = get_default_localization_strings($language);

  return (array_key_exists($string, $translations)) ? $translations[ $string ] : '';
}
