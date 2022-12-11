<?php

namespace Brandpaka;

?>

<?php if (! empty($contact_info = get_field("contact_info", "options"))) : ?>
  <ul class="contact-info <?php echo esc_html($args['class']); ?>">
    <?php if (! empty($name = $contact_info['name'])) : ?>
      <li class="contact-info__item -name">
        <?php echo esc_html__($name, 'brandpaka'); ?>
      </li>
    <?php endif;

    if (! empty($phone = $contact_info["phone"])) : ?>
      <li class="contact-info__item -phone">
        <a 
          href="tel:<?php echo esc_url($phone); ?>"
          aria-label="<?php echo $phone; ?>"
          class="contact-info__item -phone-link">
          
          <?php if (! empty($phone_formatted = $contact_info["phone_formatted"])) :
            echo esc_html($phone_formatted);
          else :
            echo esc_html($phone);
          endif; ?>
        </a>
      </li>
    <?php endif; ?>

    <?php if (! empty($email = $contact_info["e-mail"])) : ?>
      <li class="contact-info__item -email">
        <a 
          href="mailto:<?php echo esc_url($email); ?>"
          aria-label="<?php echo $email; ?>"
          class="contact-info__item -e-mail-link">
          <?php echo esc_html($email); ?>
        </a>
      </li>
    <?php endif;

    if (! empty($address = $contact_info['address'])) : ?>
      <li class="contact-info__item -address">
        <?php echo $address; ?>
      </li>
    <?php endif;

    if (! empty($regon = $contact_info['regon'])) : ?>
      <li class="contact-info__item -regon">
        <?php echo esc_html__("REGON: {$regon}", 'brandpaka'); ?>
      </li>
    <?php endif;

    if (! empty($nip = $contact_info['nip'])) : ?>
      <li class="contact-info__item -nip">
        <?php echo esc_html__("NIP: {$nip}", 'brandpaka'); ?>
      </li>
    <?php endif;

    if (! empty($krs = $contact_info['krs'])) : ?>
      <li class="contact-info__item -krs">
        <?php echo esc_html__("KRS: {$krs}", 'brandpaka'); ?>
      </li>
    <?php endif; ?>
  </ul>
<?php endif; ?>