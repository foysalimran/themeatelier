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
    <nav class="container flex flex-wrap items-center gap-2 justify-between">
      <div class="items-center md:flex">
        <div class="site-branding">
          <?php
          the_custom_logo();
          ?>
          <a class="text-2xl font-black text-font-color" href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a>

        </div><!-- .site-branding -->
      </div>
      <button id="menu-button" type="button" class="inline-flex items-center ml-auto md:hidden">
        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
        </svg>
        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
        </svg>
      </button>
      <div class="flex items-center gap-7">
        <ul class="cwp-header">
          <li>
            <a href="#">Features</a>
          </li>
          <li>
            <a href="#">Screenshots</a>
          </li>
          <li>
            <a href="#">Pricing</a>
          </li>
            <li class="group relative ml-0 lg:!ml-4 my-1 lg:my-0">
              <a class="py-1 lg:py-3 inline-block" href="#">
                <?php echo esc_html__('My Account', 'themeatelier') ?>
                <i class="icofont-rounded-down"></i>
              </a>
              <div class="top-12 lg:pt-6 lg:group-hover:pt-3 -left-8 lg:absolute hidden group-hover:block lg:block lg:invisible group-hover:visible">
                <ul class="dropdown_menu !block bg-white after:border-b-white after:z-50 min-w-[150px] rounded-md lg:shadow-lg group-hover:py-2 lg:opacity-0 group-hover:opacity-100 ease-linear duration-100 after:invisible after:opacity-0 group-hover:after:opacity-100 lg:after:visible after:absolute after:left-16 after:border-[10px] after:-top-2 after:border-transparent">

                  <li><a href="/account"><?php echo esc_html__('Dashboard', 'themeatelier') ?></a></li>
                  <li><a href="<?php echo esc_url($logout); ?>"><?php echo esc_html__('Logout', 'themeatelier') ?></a></li>
                </ul>
              </div>
            </li>
            <li>
            <a href="#">FAQ</a>
          </li>
          <li>
            <a href="#">Account</a>
          </li>
        </ul>
        <button class="demo_btn_primary">
          <a class="text-white text-lg font-bold" href="#">Get Smart Swatches</a>
        </button>
      </div>
    </nav>
  </header>
  <!--====== Header section end ======-->