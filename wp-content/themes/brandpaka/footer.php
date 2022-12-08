<?php

namespace Brandpaka;

$data = get_field('contact_info', 'options');
?>

</div><!-- #content -->

<footer id="colophon" class="site-footer">
  <div class="site-footer__container -container">
    <div class="site-footer__wrapper">
      <?php get_template_part('template-parts/components/contact-info', null, ["class" => ""]); ?>
    </div>
  </div>
</footer>

</div><!-- #page -->

<?php wp_footer(); ?>

<a href="#page" id="top" class="top">
  <span class="screen-reader-text"><?php echo esc_html__('Back to top', 'brandpaka'); ?></span>
  <span aria-hidden="true">&uarr;</span>
</a>
</body>
</html>