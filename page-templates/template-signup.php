<?php

/**
 * Template Name: Sign Up
 */

if (! defined('ABSPATH')) {
  exit; // Exit if accessed directly.
}

get_header();

?>
<section class="pt-40 bg-white">
  <div class="container text-center">
    <h1 class="mb-0 text-4xl font-medium">Sign Up</h1>
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

get_footer();
