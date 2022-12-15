<?php

namespace Brandpaka;

$data = get_field("data");
?>

<section class="contact-form block">
  <div class="contact-form__container container">
    <?php if (! empty($data['header'])) : ?>
      <h2 class="contact-form__heading">
        <?php echo $data['header']; ?>
      </h2>
    <?php endif;

    if (! empty($data['form'])) : ?>
      <div class="contact-form__form">
        <?php echo do_shortcode($data['form']); ?>
      </div>
    <?php endif;

    get_template_part('template-parts/components/contact-info', null, ["class" => ""]); ?>
  </div>
</section>