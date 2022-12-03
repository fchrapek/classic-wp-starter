<?php

namespace Brandpaka;

$data = get_field("data");
?>

<section class="block contact-form">
  <div class="contact-form__container container">
    <?php if (! empty($data['form'])) : ?>
      <div class="contact-form__form">
        <?php echo do_shortcode($data['form']); ?>
      </div>
    <?php endif; ?>
  </div>
</section>