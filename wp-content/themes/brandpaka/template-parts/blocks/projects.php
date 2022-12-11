<?php

namespace Brandpaka;

$data = get_field("data");

$projects = get_posts([
  'numberposts' => -1,
  'post_type' => 'project',
]);
?>

<section id="projects" class="projects block">
  <div class="projects__container container">
    <div class="projects__content">
      <?php if (! empty($data["content"])) : ?>
        <?php echo $data["content"]; ?>
      <?php endif; ?>
    </div>

    <ul class="projects__grid">
      <?php foreach ($projects as $service) : ?>
        <li class="projects__project">
          <?php if (has_post_thumbnail($service->ID)) : ?>
            <figure class="projects__project-media">
              <?php echo get_the_post_thumbnail($service->ID, 'large', false, []); ?>
            </figure>
          <?php endif; ?>
        </li>
      <?php endforeach;
      wp_reset_postdata(); ?>
    </ul>
  </div>
</section>