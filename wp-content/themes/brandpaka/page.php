<?php

namespace Brandpaka;

the_post();

get_header(); ?>

<main class="site-main">
  <?php
    the_content();
  ?>
</main>

<?php get_footer();
