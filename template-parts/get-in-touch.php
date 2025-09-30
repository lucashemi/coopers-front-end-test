<?php

// Get in touch section ACF variables
$get_in_touch_avatar = get_field('get_in_touch_avatar');
$get_in_touch_icon = get_field('get_in_touch_icon');
$get_in_touch_title = get_field('get_in_touch_title');
$get_in_touch_subtitle = get_field('get_in_touch_subtitle');
$get_in_touch_avatar_graphism = get_field('get_in_touch_avatar_graphism');

?>

<section class="get-in-touch" id="contact">
  <div class="avatar-div">
    <div class="get-in-touch-avatar-graphism"
      style="background-image: url('<?php echo esc_url($get_in_touch_avatar_graphism); ?>'"></div>
    <img src="<?php echo esc_url($get_in_touch_avatar); ?>" alt="Avatar" class="avatar" aria-hidden>
  </div>
  <div class="get-in-touch-content">
    <div class="get-in-touch-header">
      <img src="<?php echo esc_url($get_in_touch_icon); ?>" alt="Email icon" class="get-in-touch-icon">
      <h2 class="get-in-touch-title"><?php echo esc_html($get_in_touch_title); ?>
        <span><?php echo esc_html($get_in_touch_subtitle); ?></span>
      </h2>
    </div>
    <form action="" class="get-in-touch-form" data-contact-form>
      <div class="get-in-touch-form-input-div">
        <label for="name" class="get-in-touch-form-input-label">
          Your name
        </label>
        <input id="name" type="text" name="name" maxlength="100" class="get-in-touch-form-input"
          placeholder="type your name here...">
      </div>
      <div class="get-in-touch-form-input-div-two">
        <div class="get-in-touch-form-input-div">
          <label for="email" class="get-in-touch-form-input-label">
            E-mail*
          </label>
          <input required id="email" type="email" name="email" maxlength="100" class="get-in-touch-form-input"
            placeholder="example@example.com">
        </div>
        <div class="get-in-touch-form-input-div">
          <label for="tel" class="get-in-touch-form-input-label">
            Telephone*
          </label>
          <input data-tel required id="tel" type="tel" name="tel" maxlength="15" class="get-in-touch-form-input"
            placeholder="( ) _____-____">
        </div>
      </div>
      <div class="get-in-touch-form-input-div">
        <label for="message" class="get-in-touch-form-input-label">
          Message*
        </label>
        <textarea required id="message" name="message" maxlength="500" class="get-in-touch-form-message"
          placeholder="Type what you want to say to us"></textarea>
      </div>
      <button type="submit" class="get-in-touch-form-button">
        Send now
      </button>
    </form>
  </div>
</section>