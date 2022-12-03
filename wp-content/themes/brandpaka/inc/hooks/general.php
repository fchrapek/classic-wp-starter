<?php

namespace Brandpaka;

function widgets_init()
{
  register_sidebar([
    'name'          => esc_html__('Sidebar', 'brandpaka'),
    'id'            => 'sidebar-1',
    'description'   => esc_html__('Add widgets here.', 'brandpaka'),
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>',
  ]);
}

function custom_mime_types($mimes)
{
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
