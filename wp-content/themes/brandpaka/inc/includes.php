<?php

namespace Brandpaka;

require get_theme_file_path('/inc/includes/theme-setup.php');
require get_theme_file_path('/inc/includes/localization.php');
require get_theme_file_path('/inc/includes/nav-walker.php');

// We check this with if, because this stuff will not go to WP theme directory
if (file_exists(get_theme_file_path('/inc/includes/taxonomy.php'))) {
  require get_theme_file_path('/inc/includes/taxonomy.php');
}
if (file_exists(get_theme_file_path('/inc/includes/post-type.php'))) {
  require get_theme_file_path('/inc/includes/post-type.php');
}

require get_theme_file_path('/inc/includes/disable-emoji.php');
require get_theme_file_path('/inc/includes/security.php');
require get_theme_file_path('/inc/includes/yoast.php');
