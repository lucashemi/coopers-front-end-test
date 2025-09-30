<?php

// Hero ACF variables
$title = get_field('title');
$subtitle = get_field('subtitle');
$description = get_field('description');
$button_text = get_field('button_text');
$hero_image = get_field('hero_image');
$background_image = get_field('background_image');
$hero_scroll_icon = get_field('hero_scroll_icon');

?>

<section class="hero">
  <div class="hero-wrapper">
    <div class="hero-content">
      <h1 class="hero-title"><?php echo esc_html($title); ?> <span
          class="hero-subtitle"><?php echo esc_html($subtitle); ?></span></h1>
      <p class="hero-description"><?php echo esc_html($description); ?></p>
      <a href="#todo-list-title">
        <button class="hero-button"><?php echo esc_html($button_text); ?></button>
      </a>
    </div>
    <div class="right-side">
      <div class="hero-background-image" style="background-image: url('<?php echo esc_url($background_image); ?>');">
      </div>
      <div class="hero-div-image">
        <img class="hero-image" src="<?php echo esc_url($hero_image); ?>" alt="" aria-hidden="true" />
      </div>
    </div>
  </div>
  <div class="hero-scroll">
    <img class="hero-scroll-icon" src="<?php echo esc_url($hero_scroll_icon); ?>" alt="" aria-hidden="true" />
  </div>
</section>