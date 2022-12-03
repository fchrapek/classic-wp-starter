<?php

namespace Brandpaka;

?>

<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="http://gmpg.org/xfn/11">

  <?php wp_head(); ?>
</head>

<body <?php body_class('no-js'); ?>>
  <a class="skip-link screen-reader-text js-trigger" href="#content">
    <?php echo esc_html(get_default_localization('Skip to content')); ?>
  </a>

  <?php wp_body_open(); ?>

  <div id="page" class="site">
    <header class="site-header">
      <div class="site-header__container container">
        <div class="site-header__branding">
          <a href="<?php echo esc_url(home_url('/')); ?>" rel="home" class="site-header__branding-link">
            <span class="site-header__branding-name">
              <?php bloginfo('name'); ?>
            </span>
          </a>
        </div>

        <button
            id="nav-toggle"
            class="site-nav__toggle"
            aria-controls="nav"
            aria-label="<?php echo esc_html('Open main menu'); ?>"
            type="button"
            data-nav-toggle
          >
          <?php echo esc_html('Menu'); ?>
        </button>

        <nav class="site-nav" data-site-nav>
          <?php wp_nav_menu([
            'theme_location' => 'primary',
            'container'      => false,
            'depth'          => 1,
            'menu_class'     => 'site-nav__menu',
            'menu_id'        => 'main-menu',
            'echo'           => true,
            'fallback_cb'    => __NAMESPACE__ . '\Nav_Walker::fallback',
            'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
            'walker'         => new Nav_Walker(),
          ]); ?>
        </nav>
      </div>
    </header><!-- .nav-container -->

    <div class="site-content">
