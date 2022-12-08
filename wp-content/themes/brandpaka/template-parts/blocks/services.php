<?php

namespace Brandpaka;

$data = get_field("data");

$services = get_posts([
  'numberposts' => -1,
  'post_type' => 'service',
]);
?>

<section class="services">
  <div class="services__container container">
    <div class="services__content">
      <?php if (! empty($data["content"])) : ?>
        <?php echo $data["content"]; ?>
      <?php endif; ?>
    </div>

    <ul class="services__grid">
      <?php foreach ($services as $service) : ?>
        <li class="services__service">
          <?php if (has_post_thumbnail($service->ID)) : ?>
            <figure class="services__service-media">
              <?php echo get_the_post_thumbnail($service->ID, "large", false, []); ?>
            </figure>
          <?php endif; ?>

          <?php if (! empty($service->post_title)) : ?>
            <h3 class="services__service-heading">
              <?php echo $service->post_title; ?>
            </h3>
          <?php endif; ?>

          <?php if (! empty($service->post_content)) : ?>
            <div class="services__service-content">
              <?php echo $service->post_content; ?>
            </div>
          <?php endif; ?>
        </li>
      <?php endforeach;
      wp_reset_postdata(); ?>
    </ul>
  </div>
</section>