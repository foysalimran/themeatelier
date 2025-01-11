<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <header class="cwp-header" id="menu">
    <nav class="container flex flex-wrap items-center gap-2 justify-between">
      <div class="items-center lg:flex">
        <div class="site-branding">
          <?php
          the_custom_logo();
          ?>
          <a class="text-2xl font-black text-font-color" href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a>

        </div><!-- .site-branding -->
      </div>
      <button id="menu-button" type="button" class="inline-flex items-center ml-auto lg:hidden">
        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
        </svg>
        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
        </svg>
      </button>
      <div class="flex w-full ml-auto lg:flex lg:w-auto">
        <ul>
          <li>
            <a href="#features">Features</a>
          </li>
          <li>
            <a href="#screenshots">Screenshots</a>
          </li>
          <li>
            <a href="#pricing">Pricing</a>
          </li>
          <li class="group relative ml-0 lg:!ml-4 my-1 lg:my-0 sm:flex-col">
            <a class="py-1 lg:py-3 inline-block" href="#">
              <?php echo esc_html__('Resources', 'themeatelier') ?>
              <i class="icofont-rounded-down"></i>
            </a>
            <div class="top-12 lg:pt-6 lg:group-hover:pt-3 -left-8 lg:absolute hidden group-hover:block lg:block lg:invisible group-hover:visible">
              <ul class="dropdown_menu !block bg-white lg:pb-2 lg:after:border-b-secondary after:z-50 min-w-[250px] rounded-md lg:opacity-0 group-hover:opacity-100 ease-linear duration-100 after:invisible after:opacity-0 group-hover:after:opacity-100 lg:after:visible after:absolute after:left-16 lg:after:border-[10px] after:-top-2 after:border-transparent lg:shadow-md lg:border border-solid border-secondary">
                <li><a href="/blog"><?php echo esc_html__('Blog', 'themeatelier') ?></a></li>
                <li><a id="changelog" href="#"><?php echo esc_html__('Changelogs – What’s New', 'themeatelier') ?></a></li>
                <li><a target="_blank" id="changelog" href="https://docs.themeatelier.net/docs/whatsapp-chat-help-pro/overview/"><?php echo esc_html__('Documentation', 'themeatelier') ?></a></li>
                <li><a target="_blank" id="changelog" href="https://www.youtube.com/watch?v=2WzK6mE6BQE"><?php echo esc_html__('Video Tutorials', 'themeatelier') ?></a></li>
                <li><a id="changelog" href="/contact"><?php echo esc_html__('Submit a Ticket', 'themeatelier') ?></a></li>
                <li><a id="changelog" href="/contact"><?php echo esc_html__('Contact Us', 'themeatelier') ?></a></li>
              </ul>
            </div>
          </li>
          <li>
            <a href="/faq">FAQ</a>
          </li>
          <li>
            <a href="/account">Account</a>
          </li>
          <li>
            <a class="!text-white text-lg font-bold demo_btn_primary hover:!text-white !py-2" href="#pricing">Get Smart Swatches</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!--====== Header section end ======-->