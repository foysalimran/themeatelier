<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <header class="ta-header" id="menu">
    <nav class="container flex-col md:flex-row flex flex-wrap items-center gap-2 justify-between">
      <div class="items-center md:flex">
        <div class="site-branding">
          <?php
          the_custom_logo();
          ?>
          <a class="text-2xl font-black text-font-color" href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a>

        </div><!-- .site-branding -->

      </div>
      <div class="">
        <span class="text-2xl font-bold text-font-color"><?php echo get_the_title(); ?></span>
      </div>
      <div class="pb-2 md:pb-0 flex gap-2 items-center">
        <svg class="fill-primary w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
          <path d="M144 144l0 48 160 0 0-48c0-44.2-35.8-80-80-80s-80 35.8-80 80zM80 192l0-48C80 64.5 144.5 0 224 0s144 64.5 144 144l0 48 16 0c35.3 0 64 28.7 64 64l0 192c0 35.3-28.7 64-64 64L64 512c-35.3 0-64-28.7-64-64L0 256c0-35.3 28.7-64 64-64l16 0z" />
        </svg>
        Secure SSL Encrypted Payment
      </div>
    </nav>

  </header>
  <!--====== Header section end ======-->