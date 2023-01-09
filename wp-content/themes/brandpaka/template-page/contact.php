<?php

/*
 * Template Name: Contact
 */

namespace Brandpaka;

get_header();

$data = get_field('data');?>

<main class="site-main">
  <div class="page-contact container">
    <section class="page-contact__contact-details">
      <?php if (! empty($content = $data["content"])) :
        echo $content;

        get_template_part('template-parts/components/contact-info');
      endif;?>
    </section>

    <?php if (! empty($form = $data["contact_form_shortcode"])) : ?> 
      <section class="page-contact__form">
        <?php echo do_shortcode($form); ?>
      </section>
    <?php endif; ?>

  </div>
</main>

<?php get_footer();