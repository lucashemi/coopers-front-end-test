<?php

// Plans section ACF variables
$left_graphism = get_field('left_graphism');
$plan_check = get_field('plan_check');
$plan_uncheck = get_field('plan_uncheck');
$plan_button_text = get_field('plan_button_text');

?>

<section class="plans">
  <div class="left-graphism" style="background-image: url('<?php echo esc_url($left_graphism); ?>');"></div>
  <div class="plans-content">
    <?php
    $args = ['post_type' => 'plan'];
    $plans = new WP_Query($args);
    if ($plans->have_posts()):
      while ($plans->have_posts()):
        $plans->the_post();
        $price = get_field('price');
        $name = get_field('name');
        $description = get_field('description');

        // Features text
        $feature_one = get_field('feature_one');
        $feature_two = get_field('feature_two');
        $feature_three = get_field('feature_three');
        $feature_four = get_field('feature_four');
        $feature_five = get_field('feature_five');

        // Features checked or not with images
        $feature_one_check = get_field('feature_one_check') ? $plan_check : $plan_uncheck;
        $feature_two_check = get_field('feature_two_check') ? $plan_check : $plan_uncheck;
        $feature_three_check = get_field('feature_three_check') ? $plan_check : $plan_uncheck;
        $feature_four_check = get_field('feature_four_check') ? $plan_check : $plan_uncheck;
        $feature_five_check = get_field('feature_five_check') ? $plan_check : $plan_uncheck;

        ?>
        <div class="plans-card">
          <div class="plans-card-header">
            <h2 class="plans-card-title">$ <?php echo esc_html($price); ?> / month</h2>
            <p class="plans-card-plan-name"><?php echo esc_html($name); ?><span
                class="plans-card-plan-description"><?php echo esc_html($description); ?></span></p>
          </div>
          <div class="plans-card-body">
            <ul class="plans-card-list">
              <li class="plans-card-list-item"><img src="<?php echo esc_url($feature_one_check); ?>" />
                <span><?php echo esc_html($feature_one); ?></span>
              </li>
              <li class="plans-card-list-item"><img src="<?php echo esc_url($feature_two_check); ?>" />
                <span><?php echo esc_html($feature_two); ?></span>
              </li>
              <li class="plans-card-list-item"><img src="<?php echo esc_url($feature_three_check); ?>" />
                <span><?php echo esc_html($feature_three); ?></span>
              </li>
              <li class="plans-card-list-item"><img src="<?php echo esc_url($feature_four_check); ?>" />
                <span><?php echo esc_html($feature_four); ?></span>
              </li>
              <li class="plans-card-list-item"><img src="<?php echo esc_url($feature_five_check); ?>" />
                <span><?php echo esc_html($feature_five); ?></span>
              </li>
            </ul>
          </div>
          <div class="plans-card-footer">
            <a href="#contact">
              <button class="plans-card-button" aria-label="Go to contact"><?php echo esc_html($plan_button_text); ?></button>
            </a>
          </div>
        </div>
        <?php
      endwhile;
      wp_reset_postdata();
    endif;
    ?>
  </div>
</section>