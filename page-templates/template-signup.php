<?php

/**
 * Template Name: Sign Up
 */

if (! defined('ABSPATH')) {
  exit; // Exit if accessed directly.
}

get_header();
if (!is_user_logged_in()) {
?>
  <section class="pt-40 bg-white">
    <div class="container text-center">
      <h1 class="mb-0 text-4xl font-bold"><?php echo esc_html__('Sign Up', 'themeatelier') ?></h1>
    </div>
  </section>

  <div class="py-20 bg-white">
    <div class="container md:w-[540px] mx-auto text-lg">
      <div class="p-12 bg-white border rounded shadow-lg pb-14 border-secondary">
        <?php
        if (shortcode_exists('edd_register')) {
          echo do_shortcode('[edd_register]');
        }
        ?>
      </div>
    </div>
  </div>
<?php
} else {
?>
  <script>
    window.location.assign('/account')
  </script>
<?php
}

get_footer();
