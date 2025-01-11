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
    <nav class="container flex flex-wrap items-center gap-2">
      <div class="items-center md:flex">
        <div class="site-branding">
          <?php
          the_custom_logo();
          ?>
          <a class="text-2xl font-black text-font-color" href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a>

        </div><!-- .site-branding -->
        <div class="shrink-0">
          <?php wp_nav_menu(
            array(
              'theme_location'  => 'main'
            )
          ); ?>

        </div>
      </div>
      <button id="menu-button" type="button" class="inline-flex items-center ml-auto md:hidden">
        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
        </svg>
        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
        </svg>
      </button>

      <div class="w-full ml-auto md:flex md:w-auto">
        <ul>
          <li class="pb-2 md:pb-0">
            <a class="relative header-cart" href="/checkout"><svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                <path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z" />
              </svg>
              <div class="absolute top-0 inline-flex items-center justify-center w-4 h-4 text-xs font-bold text-white bg-red-500 rounded-full -end-2"><?php if(function_exists('edd_get_cart_quantity')){ echo edd_get_cart_quantity(); }?></div>
            </a>
          </li>
          <?php if (!is_user_logged_in()) : ?>
            <li>
              <a class="ta-btn-secondary" href="<?php echo esc_url(get_home_url() . '/login') ?>">Login</a>
            </li>
          <?php else :
            $logout = wp_logout_url('/login');
            $current_user = wp_get_current_user(); 
            $avatar_url = get_avatar_url($current_user->ID);
          ?>
            <li class="group relative ml-0 lg:!ml-4 my-1 lg:my-0">
              <a class="inline-block py-1 lg:py-3" href="#">
                <span class="inline-block float-left mr-2">
                  <img src="<?php echo esc_url($avatar_url); ?>" alt="User Avatar" class="w-5 h-5 mt-1 rounded-full avatar avatar-20 photo">
                </span>
                <?php echo esc_html__('My Account', 'themeatelier') ?>
              </a>
              <div class="hidden top-12 lg:pt-6 lg:group-hover:pt-3 -left-8 lg:absolute group-hover:block lg:block lg:invisible group-hover:visible">
                <ul class="dropdown_menu !block bg-white after:border-b-white after:z-50 min-w-[150px] rounded-md lg:shadow-lg group-hover:py-2 lg:opacity-0 group-hover:opacity-100 ease-linear duration-100 after:invisible after:opacity-0 group-hover:after:opacity-100 lg:after:visible after:absolute after:left-16 after:border-[10px] after:-top-2 after:border-transparent">
                  <li><a href="/account"><?php echo esc_html__('Dashboard', 'themeatelier') ?></a></li>
                  <li><a href="<?php echo esc_url($logout); ?>"><?php echo esc_html__('Logout', 'themeatelier') ?></a></li>
                </ul>
              </div>
            </li>
          <?php endif; ?>

        </ul>
      </div>
    </nav>

  </header>
  <!--====== Header section end ======-->