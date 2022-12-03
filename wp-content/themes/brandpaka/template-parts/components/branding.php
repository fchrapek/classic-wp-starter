<?php

namespace Brandpaka;

$description = get_bloginfo('description', 'display');
?>

<div class="site-branding <?php echo esc_html($args['class']); ?>">
  <p class="site-title">
    <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
      <span class="screen-reader-text"><?php bloginfo('name'); ?></span>
      <?php include get_theme_file_path(THEME_SETTINGS['logo']); ?>
    </a>
  </p>

  <?php if ($description || is_customize_preview()) : ?>
    <p class="site-description screen-reader-text">
      <?php echo esc_html($description); ?>
    </p>
  <?php endif; ?>
</div>
