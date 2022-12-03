<?php

namespace Brandpaka;

the_post();
get_header(); ?>

<main class="site-main">
  <section class="block block-single">
    <article class="block-single__article -container">
      <?php get_template_part('template-parts/components/post-categories', null, ["class" => "-justify-content-center"]); ?>

      <h1 class="block-single__article-title">
        <?php the_title(); ?>
      </h1>

      <figure class="block-single__article-media">
        <?php echo get_the_post_thumbnail(); ?>
      </figure>

      <?php
        the_content();
        the_post_navigation();
      ?>
    </article>
  </section>
</main>

<?php get_footer();
