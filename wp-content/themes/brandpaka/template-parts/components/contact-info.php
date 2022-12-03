<?php

namespace Brandpaka;

?>

<?php if (! empty($contact_info = get_field("contact_info", "options"))) : ?>
  <ul class="contact-info -list-reset <?php echo esc_html($args['class']); ?>">
    <?php if (! empty($name = $contact_info['name'])) : ?>
      <li class="contact-info__name">
        <?php echo esc_html__($name, 'brandpaka'); ?>
      </li>
    <?php endif;

    if (! empty($address = $contact_info['address'])) :
      list($street, $city) = explode("<br />", $address);
      if (! empty($street)) : ?>
        <li class="contact-info__address-street">
          <?php echo $street; ?>
        </li>
      <?php endif;

      if (! empty($city)) : ?>
        <li class="contact-info__address-city">
          <?php echo $city; ?>
        </li>
      <?php endif;
    endif;

    if (! empty($regon = $contact_info['regon'])) : ?>
      <li class="contact-info__regon">
        <?php echo esc_html__("REGON: {$regon}", 'brandpaka'); ?>
      </li>
    <?php endif;

    if (! empty($nip = $contact_info['nip'])) : ?>
      <li class="contact-info__nip">
        <?php echo esc_html__("NIP: {$nip}", 'brandpaka'); ?>
      </li>
    <?php endif;

    if (! empty($krs = $contact_info['krs'])) : ?>
      <li class="contact-info__krs">
        <?php echo esc_html__("KRS: {$krs}", 'brandpaka'); ?>
      </li>
    <?php endif;

    if (! empty($phone = $contact_info["phone"])) : ?>
      <li class="contact-info__phone">
        <a 
          href="tel:<?php echo esc_url($phone); ?>"
          aria-label="<?php echo $phone; ?>"
          class="contact-info__phone-link no-external-link-indicator">
          
          <?php if (! empty($phone_formatted = $contact_info["phone_formatted"])) :
            echo esc_html($phone_formatted);
          else :
            echo esc_html($phone);
          endif; ?>
        </a>
      </li>
    <?php endif; ?>

    <?php if (! empty($email = $contact_info["e-mail"])) : ?>
      <li class="contact-info__email">
        <a 
          href="mailto:<?php echo esc_url($email); ?>"
          aria-label="<?php echo $email; ?>"
          class="contact-info__e-mail-link no-external-link-indicator">
          <?php echo esc_html($email); ?>
        </a>
      </li>
    <?php endif; ?>
  </ul>
<?php endif; ?>