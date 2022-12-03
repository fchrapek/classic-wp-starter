<?php

/**
 * Entry footer
 *
 * Show categories, tags, comment and edit links after post.
 *
 */

namespace Brandpaka;

function entry_footer()
{
  echo '<div class="entry-footer">';

  if ('post' === get_post_type()) :
    if (has_category()) : ?>
      <div class="entry-categories">
        <p class="cat">
          <?php $categories = wp_get_post_categories(get_the_id(), [ 'fields' => 'all' ]);
          if (! empty($categories)) {
            foreach ($categories as $category) {
              echo '<a href="' . esc_url(get_category_link($category)) . '">' . esc_html($category->name) . '</a>';
            }
          } ?>
        </p>
      </div>
    <?php	endif;

    $tags_list = get_the_tag_list('', esc_attr_x(', ', 'list item separator', 'brandpaka'));
    if ($tags_list) {
      the_tags('<ul class="tags"><li>', '</li><li>', '</li></ul>');
    }
  endif;

  echo '</div>';
}
