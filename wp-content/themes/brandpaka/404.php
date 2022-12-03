<?php

namespace Brandpaka;

get_header(); ?>

<main class="site-main">
  <section class="block block-error-404">
    <div class="container -container">
      <div class="content">
        <h1 id="content">
          404
          <span class="screen-reader-text">
            <?php echo esc_html('Strony nie znaleziono.'); ?>
          </span>
        </h1>
        <h2 aria-hidden="true">
          <?php echo esc_html('Strony nie znaleziono.'); ?>
        </h2>
        <p>
          <?php echo esc_html('Spróbuj ponownie lub skorzystaj z głównej nawigacji.');?>
        </p>
      </div>
    </div>
  </section>
</main>

<?php

// Enable visible footer if fits project:
get_footer();

// WordPress scripts and hooks
wp_footer();
