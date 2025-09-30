<?php
// Good things section ACF variables
$good_things_title = get_field('good_things_title');
$good_things_logo = get_field('good_things_logo');
$good_things_button_text = get_field('good_things_button_text');

?>

<section class="good-things">
  <div class="good-things-bg"></div>
  <div class="good-things-content">
    <h2 class="good-things-title">
      <?php echo esc_html($good_things_title); ?>
    </h2>
    <div class="good-things-cards-container">
      <div class="good-things-cards" data-slider-track>
        <?php
        $i = 0;
        $args = ['post_type' => 'post'];
        $posts = new WP_Query($args);
        if ($posts->have_posts()):
          while ($posts->have_posts()):
            $posts->the_post();
            $post_image = get_the_post_thumbnail_url();
            $post_tag = get_the_tags()[0]->name ?? 'function';
            $post_title = get_the_title();
            $post_url = get_permalink();
            ?>
            <div class="good-things-card" data-slider-card>
              <div class="good-things-card-image-div">
                <img class="good-things-card-image" src="<?php echo esc_url($post_image); ?>" />
              </div>
              <div class="good-things-card-logo"
                style="background-image: url('<?php echo esc_url($good_things_logo); ?>');"></div>
              <div class="good-things-card-content">
                <span class="good-things-card-tag"><?php echo esc_html($post_tag); ?></span>
                <h3 class="good-things-card-title"><?php echo esc_html($post_title); ?></h3>
                <a href="<?php echo esc_url($post_url); ?>" class="good-things-card-button">
                  <?php echo esc_html($good_things_button_text); ?>
                </a>
              </div>
            </div>
            <?php
            $i++;
          endwhile;
          wp_reset_postdata();
        endif;
        ?>
      </div>
      <div class="good-things-bullet-container" data-bullets>
      </div>
    </div>
  </div>
</section>