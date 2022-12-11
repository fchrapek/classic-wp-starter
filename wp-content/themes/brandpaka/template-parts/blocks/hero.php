<?php

namespace Brandpaka;

$data = get_field('data');
?>

<section class="hero block">
  <div class="hero__container container">
    <div class="hero__content">
      <?php if (! empty($data['content'])) : ?>
        <?php echo $data['content']; ?>
      <?php endif;

      if (! empty($btn = $data['button'])) : ?>
        <a
          href="<?php echo esc_url($btn['url']); ?>"
          target="<?php echo esc_attr($btn['target'] ? $btn['target'] : '_self'); ?>"
          class="hero__button js-trigger button">

          <span class="button__inner">
            <?php echo esc_html($btn['title']); ?>            
          </span>
        </a>
      <?php endif; ?>
    </div>

    <?php if (! empty($data['image'])) : ?>
      <figure class="hero__media">
        <?php echo wp_get_attachment_image($data['image'], 'full', false, []); ?>
      </figure>
    <?php endif; ?>
  </div>
</section>
