<?php

namespace Brandpaka;

function exclude_sticky_from_blog($query)
{
  $sticky = get_option('sticky_posts');

  if (! empty($sticky)) {
    if ($query->is_home() && $query->is_main_query()) {
      $query->set('post__not_in', $sticky);
    }
  }
}
