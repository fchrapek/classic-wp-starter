<?php

namespace Brandpaka;

?>

<?php if (! empty($social_media = get_field("social_media", "options"))) : ?>
  <ul class="social-media -list-reset -flex -gap-16">
    <?php foreach ($social_media as $item) : ?>
      <li class="social-media__item">
        <?php if (! empty($icon = $item["icon"]) && ! empty($url = $item["url"])) : ?>
          <a href="<?php echo esc_url($url); ?>" target="_blank" class="social-media__url">
            <?php echo wp_get_attachment_image($icon["id"], "full", false, ["class" => "social-media__icon", "alt" => $icon["alt"]]); ?>
          </a>
        <?php endif; ?>
      </li>
    <?php endforeach; ?>
  </ul>
<?php endif; ?>