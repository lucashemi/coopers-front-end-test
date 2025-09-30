<?php

// To-do list ACF variables
$to_do_list_background_image = get_field('to-do_list_background_image');
$to_do_list_title = get_field('to-do_list_title');
$to_do_list_description = get_field('to-do_list_description');

?>

<section class="to-do-list" aria-labelledby="todo-list-title" aria-describedby="to-do-list-description">
  <div class="to-do-list-background"
    style="background-image: url('<?php echo esc_url($to_do_list_background_image); ?>');"></div>
  <div class="to-do-list-content">
    <h2 class="to-do-list-title" id="todo-list-title"><?php echo esc_html($to_do_list_title); ?></h2>
    <p class="to-do-list-description" id="to-do-list-description"><?php echo esc_html($to_do_list_description); ?></p>
  </div>
</section>