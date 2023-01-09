<?php

namespace Brandpaka;

$data = get_field('data');
?>

<section class="block content-image">
  <div class="content-image__container container">
    <div class="content-image__content">
      <?php if (! empty($data['content'])) : ?>
        <?php echo $data['content']; ?>
      <?php endif;

      if (! empty($btn = $data['button'])) : ?>
        <a
          href="<?php echo esc_url($btn['url']); ?>"
          target="<?php echo esc_attr($btn['target'] ? $btn['target'] : '_self'); ?>"
          class="content-image__button js-trigger button">

          <?php echo esc_html($btn['title']); ?>            
        </a>
      <?php endif; ?>
    </div>

    <?php if (! empty($data['image'])) : ?>
      <figure class="content-image__media">
        <?php echo wp_get_attachment_image($data['image'], 'full', false, ['class' => 'content-image__media-img']); ?>
      </figure>
    <?php endif; ?>
  </div>
</section>
