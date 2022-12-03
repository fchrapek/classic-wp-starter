<?php

namespace Brandpaka;

if (! empty($cats = get_categories())) : ?>
  <div class="<?php echo esc_html($args['class']); ?> cats -flex -flex-wrap -justify-content-center -gap-8">
    <?php foreach ($cats as $cat) : ?>
      <a href="<?php echo esc_url(get_category_link($cat)) ?>" class="cats__cat -inline-block -bg-gray-200">
        <?php echo esc_html($cat->name); ?>
      </a>
    <?php endforeach; ?>
  </div>
<?php endif; ?>
