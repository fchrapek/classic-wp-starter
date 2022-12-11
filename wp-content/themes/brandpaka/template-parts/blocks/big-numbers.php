<?php

namespace Brandpaka;

$data = get_field('data');
?>

<section class="big-numbers">
  <div class="big-numbers__container container">
    <?php if (! empty($data['big_numbers'])) : ?>
      <ul class="big-numbers__numbers">
        <?php foreach ($data['big_numbers'] as $numbers) : ?>
          <?php if (! empty($numbers['heading'])) : ?>
            <li class="big-numbers__number">
              <h3 class="big-numbers__number-heading">
                <?php echo $numbers['heading']; ?>

                <span class="big-numbers__number-subheading">
                  <?php echo $numbers['subheading']; ?>
                </span>
              </h3>
            </li>
          <?php endif; ?>
        <?php endforeach; ?>
      </ul>
    <?php endif; ?>
  </div>
</section>
