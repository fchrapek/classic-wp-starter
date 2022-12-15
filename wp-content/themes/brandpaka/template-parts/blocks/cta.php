<?php

namespace Brandpaka;

$data = get_field('data');
?>

<section class="block cta">
  <div class="cta__container container">
    <?php if (! empty($data['content'])) : ?>
      <div class="cta__content">
        <?php echo $data['content']; ?>
      </div>
    <?php endif;

    if (! empty($btn = $data['button'])) : ?>
      <a
        href="<?php echo esc_url($btn['url']); ?>"
        target="<?php echo esc_attr($btn['target'] ? $btn['target'] : '_self'); ?>"
        class="cta__button js-trigger button -secondary">

          <span class="button__inner">
            <?php echo esc_html($btn['title']); ?>            
          </span>
      </a>
    <?php endif; ?>
  </div>
</section>
