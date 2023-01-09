<?php

namespace Brandpaka;

get_header();
?>

<main class="site-main">
  <section class="blog-posts">
    <div class="blog-posts__container -container">
      <div class="blog-posts__intro">
        <h1 class="blog-posts__intro-heading">
          <?php echo esc_html__("Rozkręćmy Twój biznes w sieci! Sprawdź wksazówki, jak zrobić to szybko, łatwo i przyjemnie.", "brandpaka"); ?>
        </h1>

        <p class="blog-posts__intro-content">
          <?php echo esc_html__("Dzielimy się wiedzą z zakresu mniej i bardziej technicznych zagadnień związanych z marketingiem internetowym, które skutecznie pomogą ekspresowo i z przytupem wystartować z bizesem w sieci!", "brandpaka"); ?>
        </p>

        <?php get_template_part("template-parts/components/categories"); ?>
      </div>

      <div class="blog-posts__highlighted -grid -gap-16 -md-cols-2 -lg-cols-3 -lg-gap-48">
        <div class="blog-posts__highlighted-sticky">
          <?php $query_sticky = new \WP_Query(["post__in" => get_option("sticky_posts")]);

          while ($query_sticky->have_posts()) : $query_sticky->the_post(); //phpcs:ignore
            get_template_part("template-parts/components/blog-thumbnail", null, ["char_limit" => 35]);
          endwhile;

          wp_reset_postdata(); ?>
        </div>
        
        <div class="blog-posts__highlighted-others">
          <h3 class="blog-post__highlighted-others-heading">
            <?php echo esc_html__('Polecane wpisy', 'brandpaka'); ?>
          </h3>

          <?php $args = [
            "posts_per_page" => 3,
            "post__not_in" => get_option("sticky_posts"),
            "meta_query" => [
              [
                "key" => "highlighted",
                "value" => "1"
              ]
            ]
          ];

          $query_highlighted = new \WP_Query($args);

          while ($query_highlighted->have_posts()) : $query_highlighted->the_post(); //phpcs:ignore
            get_template_part("template-parts/components/blog-thumbnail");
          endwhile; ?>
        </div>
      </div>

      <?php if (have_posts()) : ?>
        <div class="blog-posts__posts-wrapper -grid -gap-16 -md-cols-2 -lg-cols-3 -lg-gap-48">
          <?php while (have_posts()) : the_post(); //phpcs:ignore  
            get_template_part("template-parts/components/blog-thumbnail", null, ["char_limit" => 15]);
          endwhile;

          wp_reset_postdata(); ?>
        </div>

        <?php the_posts_pagination(); ?>
      <?php endif; ?>
    </div>
  </section>
</main>

<?php get_footer();
