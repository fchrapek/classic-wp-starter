<?php

namespace Brandpaka;

function conditional_dequeue_cf7()
{
  $classes = get_body_class();

  if (in_array('page-template-contact', $classes)) {
      wp_enqueue_script('contact-form-7');
      wp_enqueue_style('contact-form-7');
  } else {
      wp_dequeue_script('contact-form-7');
      wp_dequeue_style('contact-form-7');
  }
}
