<?php
/**
 * Template Name: Home Page Template
 */
get_header(); ?>

    <!--====== Hero section start ======-->
    <section class="h-full pb-20 lg:pb-0 lg:h-[750px] bg-secondary">
      <div class="container h-full px-4 m-auto">
        <div
          class="relative z-10 items-center block h-full grid-cols-5 gap-8 lg:grid xl:grid-cols-6"
        >
          <div class="col-span-3 pt-48 lg:pt-0">
            <h1 class="mb-0 text-3xl font-bold xl:text-ta-section-title">
              Most Professional
              <span class="text-primary">WordPress Plugins</span>
              <br class="hidden lg:block" />
              To Save Time on Development
            </h1>
            <p class="mt-6 text-lg">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores
              molestias fugiat praesentium ullam officiis? Reprehenderit in.
            </p>
            <a href="#" class="mt-12 ta-btn-primary group"
              >See Our Plugins
              <svg
                width="12"
                height="12"
                viewBox="0 0 14 14"
                class="inline-block duration-200 ease-linear fill-white group-hover:translate-x-2"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M7 0L5.76625 1.23375L10.6488 6.125H0V7.875H10.6488L5.76625 12.7663L7 14L14 7L7 0Z"
                ></path>
              </svg>
            </a>
            <div
              class="p-4 mt-12 bg-white rounded shadow ta-hero-promo lg:py-5 lg:px-6"
            >
              <p class="mb-5">
                Empowering
                <strong>520,000+</strong> Businesses with Innovation
              </p>
              <div class="grid grid-cols-5 gap-2 md:gap-4">
                <div class="flex flex-col justify-center col-span-1">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/freemius.png" alt="" />
                </div>
                <div class="flex flex-col justify-center col-span-1">
                  <img
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/sponsor-page-logo-mayor.png"
                    alt=""
                  />
                </div>
                <div class="flex flex-col justify-center col-span-1">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/WPLeaders-Logo.png" alt="" />
                </div>
                <div class="flex flex-col justify-center col-span-1">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Page-1.png" alt="" />
                </div>
                <div class="flex flex-col justify-center col-span-1">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/wpallclub-logo.png" alt="" />
                </div>
              </div>
            </div>
          </div>
          <div
            class="my-20 lg:my-0 ml-auto h-[350px] xl:h-[400px] bg-banner-img w-full bg-no-repeat bg-center bg-contain xl:bg-right col-span-2 xl:col-span-3 relative z-10"
          ></div>
        </div>
      </div>
    </section>
    <!--====== Hero section end ======-->
    <!--====== Featured section start ======-->
    <section class="py-16 ta-featured sm:py-20">
      <div class="container">
        <div class="mb-20 text-center">
          <h2 class="text-ta-section-title -mt-1.5 mb-0 font-medium">
            Our Featured Plugins
          </h2>
          <span class="inline-block mt-5 text-lg font-normal"
            >Extend your website’s functionality with our powerful WordPress
            plugins</span
          >
        </div>
        <div
          class="grid grid-cols-1 gap-5 md:grid-cols-2 lg:grid-cols-3 lg:gap-7"
        >
          <div class="relative group ta-featured-item">
            <a
              class="block h-full p-5 duration-300 ease-linear border rounded hover:-translate-y-1 shadow-ta-box-shadow lg:p-8 border-secondary hover:border-primary"
              href="#"
            >
              <div>
                <img
                  width="256"
                  height="256"
                  src="<?php echo get_template_directory_uri(); ?>/assets/images/wp-carousel.png"
                  alt=""
                  class="max-w-[64px] rounded-md"
                />
              </div>
              <div>
                <h3 class="mt-5 mb-0 text-xl font-medium">WP Carousel</h3>
                <p class="mt-3 text-base font-normal"></p>
                <p>
                  The most powerful and user-friendly multi-purpose carousel,
                  slider, &amp; gallery plugin for WordPress.
                </p>
                <p></p>
              </div>
              <span
                class="text-primary text-sm leading-[30px] text-center absolute h-8 w-8 flex items-center justify-center border border-primary rounded-full top-12 right-12 invisible group-hover:visible ease-linear duration-300 opacity-0 group-hover:opacity-100"
                ><svg
                  width="16"
                  height="16"
                  class="fill-primary"
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 448 512"
                >
                  <path
                    d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"
                  />
                </svg>
              </span>
            </a>
          </div>
          <div class="relative group ta-featured-item">
            <a
              class="block h-full p-5 duration-300 ease-linear border rounded hover:-translate-y-1 shadow-ta-box-shadow lg:p-8 border-secondary hover:border-primary"
              href="#"
            >
              <div>
                <img
                  width="256"
                  height="256"
                  src="<?php echo get_template_directory_uri(); ?>/assets/images/woo-product-slider.png"
                  alt=""
                  class="max-w-[64px] rounded-md"
                />
              </div>
              <div>
                <h3 class="mt-5 mb-0 text-xl font-medium">
                  Product Slider for WooCommerce
                </h3>
                <p class="mt-3 text-base font-normal"></p>
                <p>
                  Boost sales by interactive product Slider, Grid, and Table in
                  your WooCommerce website or store.
                </p>
                <p></p>
              </div>
              <span
                class="text-primary text-sm leading-[30px] text-center absolute h-8 w-8 flex items-center justify-center border border-primary rounded-full top-12 right-12 invisible group-hover:visible ease-linear duration-300 opacity-0 group-hover:opacity-100"
                ><svg
                  width="16"
                  height="16"
                  class="fill-primary"
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 448 512"
                >
                  <path
                    d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"
                  />
                </svg>
              </span>
            </a>
          </div>
          <div class="relative group ta-featured-item">
            <a
              class="block h-full p-5 duration-300 ease-linear border rounded hover:-translate-y-1 shadow-ta-box-shadow lg:p-8 border-secondary hover:border-primary"
              href="#"
            >
              <div>
                <img
                  width="256"
                  height="256"
                  src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-carousel.png"
                  alt=""
                  class="max-w-[64px] rounded-md"
                />
              </div>
              <div>
                <h3 class="mt-5 mb-0 text-xl font-medium">Logo Carousel</h3>
                <p class="mt-3 text-base font-normal"></p>
                <p>
                  Showcase a group of logo images with Title, Description,
                  Tooltips, Links, and Popup as a grid or in a carousel.
                </p>
                <p></p>
              </div>
              <span
                class="text-primary text-sm leading-[30px] text-center absolute h-8 w-8 flex items-center justify-center border border-primary rounded-full top-12 right-12 invisible group-hover:visible ease-linear duration-300 opacity-0 group-hover:opacity-100"
                ><svg
                  width="16"
                  height="16"
                  class="fill-primary"
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 448 512"
                >
                  <path
                    d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"
                  />
                </svg>
              </span>
            </a>
          </div>
          <div class="relative group ta-featured-item">
            <a
              class="block h-full p-5 duration-300 ease-linear border rounded hover:-translate-y-1 shadow-ta-box-shadow lg:p-8 border-secondary hover:border-primary"
              href="#"
            >
              <div>
                <img
                  width="256"
                  height="256"
                  src="<?php echo get_template_directory_uri(); ?>/assets/images/smart-post-show.png"
                  alt=""
                  class="max-w-[64px] rounded-md"
                />
              </div>
              <div>
                <h3 class="mt-5 mb-0 text-xl font-medium">Smart Post Show</h3>
                <p class="mt-3 text-base font-normal"></p>
                <p>
                  Filter and display posts (any post types), pages, taxonomy,
                  custom taxonomy, and custom field, in beautiful layouts.
                </p>
                <p></p>
              </div>
              <span
                class="text-primary text-sm leading-[30px] text-center absolute h-8 w-8 flex items-center justify-center border border-primary rounded-full top-12 right-12 invisible group-hover:visible ease-linear duration-300 opacity-0 group-hover:opacity-100"
                ><svg
                  width="16"
                  height="16"
                  class="fill-primary"
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 448 512"
                >
                  <path
                    d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"
                  />
                </svg>
              </span>
            </a>
          </div>
          <div class="relative group ta-featured-item">
            <a
              class="block h-full p-5 duration-300 ease-linear border rounded hover:-translate-y-1 shadow-ta-box-shadow lg:p-8 border-secondary hover:border-primary"
              href="#"
            >
              <div>
                <img
                  width="256"
                  height="256"
                  src="<?php echo get_template_directory_uri(); ?>/assets/images/easy-accordion.png"
                  alt=""
                  class="max-w-[64px] rounded-md"
                />
              </div>
              <div>
                <h3 class="mt-5 mb-0 text-xl font-medium">Easy Accordion</h3>
                <p class="mt-3 text-base font-normal"></p>
                <p>
                  Minimize customer support by offering comprehensive FAQs and
                  increasing conversions.
                </p>
                <p></p>
              </div>
              <span
                class="text-primary text-sm leading-[30px] text-center absolute h-8 w-8 flex items-center justify-center border border-primary rounded-full top-12 right-12 invisible group-hover:visible ease-linear duration-300 opacity-0 group-hover:opacity-100"
                ><svg
                  width="16"
                  height="16"
                  class="fill-primary"
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 448 512"
                >
                  <path
                    d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"
                  />
                </svg>
              </span>
            </a>
          </div>
          <div class="relative group ta-featured-item">
            <a
              class="block h-full p-5 duration-300 ease-linear border rounded hover:-translate-y-1 shadow-ta-box-shadow lg:p-8 border-secondary hover:border-primary"
              href="#"
            >
              <div>
                <img
                  width="256"
                  height="256"
                  src="<?php echo get_template_directory_uri(); ?>/assets/images/real-testimonials.png"
                  alt=""
                  class="max-w-[64px] rounded-md"
                />
              </div>
              <div>
                <h3 class="mt-5 mb-0 text-xl font-medium">Real Testimonials</h3>
                <p class="mt-3 text-base font-normal"></p>
                <p>
                  Simply collect, manage, and display Testimonials on your
                  website and boost conversions.
                </p>
                <p></p>
              </div>
              <span
                class="text-primary text-sm leading-[30px] text-center absolute h-8 w-8 flex items-center justify-center border border-primary rounded-full top-12 right-12 invisible group-hover:visible ease-linear duration-300 opacity-0 group-hover:opacity-100"
                ><svg
                  width="16"
                  height="16"
                  class="fill-primary"
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 448 512"
                >
                  <path
                    d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"
                  />
                </svg>
              </span>
            </a>
          </div>
        </div>
        <div class="text-center">
          <a
            class="inline-block px-6 py-3 mt-10 text-base font-medium text-white duration-300 ease-linear rounded hover:bg-primary bg-primary group"
            href="#"
            >View All Plugins
            <svg
              width="12"
              height="12"
              viewBox="0 0 14 14"
              class="inline-block duration-200 ease-linear fill-white group-hover:translate-x-2"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M7 0L5.76625 1.23375L10.6488 6.125H0V7.875H10.6488L5.76625 12.7663L7 14L14 7L7 0Z"
              ></path>
            </svg>
          </a>
        </div>
      </div>
    </section>
    <!--====== Featured section end ======-->
    <!--====== Why choose us section start ======-->
    <section class="py-16 ta-why-choose-us bg-secondary sm:py-20">
      <div class="container">
        <div class="mb-20 text-center">
          <h2 class="text-ta-section-title -mt-1.5 mb-0 font-medium">
            Why customers love Fixolab?
          </h2>
          <span class="inline-block mt-5 text-lg font-normal"
            >Our robust WordPress plugins help businesses and organizations
            worldwide to scale up by <br class="hidden lg:block" />
            solving your web problems.</span
          >
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-7">
          <div class="text-center bg-white rounded-md p-7">
            <img
              width="51"
              height="40"
              class="m-auto entered lazyloaded"
              src="<?php echo get_template_directory_uri(); ?>/assets/images/code.svg"
              alt=""
            />
            <h3 class="mt-5 mb-0 text-xl font-medium">Standard Code</h3>
            <p class="mt-2 text-start">
              We have expert developers who follow the WordPress coding
              standards to provide you with secure and up-to-date plugins that
              are extendable and customizable.
            </p>
          </div>
          <div class="text-center bg-white rounded-md p-7">
            <img
              width="51"
              height="40"
              class="m-auto entered lazyloaded"
              src="<?php echo get_template_directory_uri(); ?>/assets/images/pricing-icon.svg"
              alt=""
            />
            <h3 class="mt-5 mb-0 text-xl font-medium">
              Most Affordable Pricing
            </h3>
            <p class="mt-2 text-start">
              We are proudly offering world-class professional WordPress plugins
              at the most affordable pricing. We'll surely make you say - Yes,
              'cheap and best' do exist!
            </p>
          </div>
          <div class="text-center bg-white rounded-md p-7">
            <img
              width="51"
              height="40"
              class="m-auto entered lazyloaded"
              src="<?php echo get_template_directory_uri(); ?>/assets/images/support-icon.svg"
              alt=""
            />
            <h3 class="mt-5 mb-0 text-xl font-medium">World-Class Support</h3>
            <p class="mt-2 text-start">
              We provide dedicatedly One To One top-notch email support
              instantly whenever you face any issues. Over 90% of our customers
              rate our support Great!
            </p>
          </div>
          <div class="text-center bg-white rounded-md p-7">
            <img
              width="51"
              height="40"
              class="m-auto entered lazyloaded"
              src="<?php echo get_template_directory_uri(); ?>/assets/images/refund.svg"
              alt=""
            />
            <h3 class="mt-5 mb-0 text-xl font-medium">Easy Refund Policy</h3>
            <p class="mt-2 text-start">
              Get a full refund within 14 days after your first purchase If you
              don't like any of our plugin(s). We follow a No Questions Asked
              refund policy for all our products.
            </p>
          </div>
          <div class="text-center bg-white rounded-md p-7">
            <img
              width="51"
              height="40"
              class="m-auto entered lazyloaded"
              src="<?php echo get_template_directory_uri(); ?>/assets/images/multilangual-icon.svg"
              alt=""
            />
            <h3 class="mt-5 mb-0 text-xl font-medium">Multilingual Ready</h3>
            <p class="mt-2 text-start">
              You can translate our plugins in your language with .po & .mo
              files. This plugin is Right To Left-RTL ready. You can even create
              multilingual websites.
            </p>
          </div>
          <div class="text-center bg-white rounded-md p-7">
            <img
              width="51"
              height="40"
              class="m-auto entered lazyloaded"
              src="<?php echo get_template_directory_uri(); ?>/assets/images/robust-icon.svg"
              alt=""
            />
            <h3 class="mt-5 mb-0 text-xl font-medium">
              Robust Free & Pro Plugins
            </h3>
            <p class="mt-2 text-start">
              We have 18+ plugins that are maintained and supported in the
              WP.org plugin repository with a combined average rating of 4.7
              stars. Most plugins have a pro.
            </p>
          </div>
        </div>
      </div>
    </section>
    <!--====== Why choose us section end ======-->
    <!--====== Support section start ======-->
    <section class="py-16 overflow-hidden ta-support sm:py-20">
      <div class="container p-10 bg-secondary md:rounded-xl md:p-0">
        <div class="grid-cols-2 md:grid">
          <div class="grid grid-cols-2 col-span-1 md:relative sm:grid-cols-3">
            <div
              class="w-20 mx-auto mb-8 text-center md:absolute md:mb-0 sm:w-28 md:top-5 md:left-8"
            >
              <div class="rounded-full border border-[#39292c26]">
                <img
                  width="1280"
                  height="1280"
                  class="rounded-full bg-[#FCDAD0]"
                  src="<?php echo get_template_directory_uri(); ?>/assets/images/Pulak.png"
                  alt="Pulak"
                />
              </div>
              <span class="inline-block mt-2 text-sm text-font-color"
                >Pulak</span
              >
            </div>
            <div
              class="w-20 mx-auto mb-8 text-center md:absolute md:mb-0 sm:w-28 md:-top-5 md:right-1/4 md:transform md:translate-x-1/4"
            >
              <div class="rounded-full border border-[#39292c26]">
                <img
                  width="1280"
                  height="1280"
                  class="rounded-full bg-[#B2DFDB]"
                  src="<?php echo get_template_directory_uri(); ?>/assets/images/Hares.png"
                  alt="Hares"
                />
              </div>
              <span class="inline-block mt-2 text-sm text-font-color"
                >Hares</span
              >
            </div>
            <div
              class="w-20 mx-auto mb-8 text-center md:absolute md:mb-0 sm:w-28 md:top-2/4 md:left-2/4 md:transform md:-translate-x-1/2 md:-translate-y-1/2"
            >
              <div class="rounded-full border border-[#39292c26]">
                <img
                  width="1280"
                  height="1280"
                  class="rounded-full bg-[#B2DFDB]"
                  src="<?php echo get_template_directory_uri(); ?>/assets/images/Hares.png"
                  alt="Hares"
                />
              </div>
              <span class="inline-block mt-2 text-sm text-font-color"
                >Hares</span
              >
            </div>
            <div
              class="w-20 mx-auto mb-8 text-center md:absolute md:mb-0 sm:w-28 md:-bottom-14 md:left-1/4 md:transform md:-translate-x-1/4"
            >
              <div class="rounded-full border border-[#39292c26]">
                <img
                  width="1280"
                  height="1280"
                  class="rounded-full bg-[#F8BBD0]"
                  src="<?php echo get_template_directory_uri(); ?>/assets/images/Abdur.png"
                  alt="Abdur"
                />
              </div>
              <span class="inline-block mt-2 text-sm text-font-color"
                >Abdur</span
              >
            </div>
            <div
              class="w-20 mx-auto mb-8 text-center md:absolute md:mb-0 sm:w-28 md:bottom-5 md:right-8"
            >
              <div class="rounded-full border border-[#39292c26]">
                <img
                  width="1280"
                  height="1280"
                  class="rounded-full bg-[#90CAF9]"
                  src="<?php echo get_template_directory_uri(); ?>/assets/images/Ria.png"
                  alt="Ria"
                />
              </div>
              <span class="inline-block mt-2 text-sm text-font-color">Ria</span>
            </div>
          </div>
          <div
            class="col-span-1 md:p-10 md:min-h-[350px] flex flex-col justify-center"
          >
            <h3 class="mb-0 text-2xl font-medium">
              Have a question? <span class="text-primary">Just ask</span>
            </h3>
            <span class="inline-block mt-2"
              >Get support from the real people</span
            >
            <div class="mt-8">
              <a class="ta-btn-secondary group" href="#"
                >Ask Now
                <svg
                  class="inline-block duration-200 ease-linear fill-primary group-hover:fill-white group-hover:translate-x-1"
                  width="14"
                  height="10"
                  viewBox="0 0 14 10"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M13.8425 4.5226L10.465 0.290439C10.3403 0.138808 10.164 0.0428426 9.97274 0.0225711C9.7815 0.00229966 9.59007 0.0592883 9.43833 0.181617C9.29698 0.313072 9.20835 0.494686 9.18999 0.6906C9.17163 0.886513 9.22487 1.08246 9.33917 1.23966L11.7425 4.26263H0.723328C0.531488 4.26263 0.347494 4.3416 0.211843 4.4822C0.0761915 4.62279 0 4.81349 0 5.01232C0 5.21116 0.0761915 5.40182 0.211843 5.54241C0.347494 5.68301 0.531488 5.76202 0.723328 5.76202H11.7425L9.33917 8.78499C9.22616 8.94269 9.17373 9.13831 9.19206 9.33383C9.21038 9.52935 9.29815 9.71082 9.43833 9.84303C9.58951 9.96682 9.78128 10.0247 9.97296 10.0044C10.1646 9.98405 10.3411 9.88716 10.465 9.73421L13.8425 5.50204C13.9447 5.36535 14.0001 5.19731 14.0001 5.02439C14.0001 4.85147 13.9447 4.68347 13.8425 4.54677V4.5226Z"
                  ></path>
                </svg>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--====== Support section end ======-->
    <!--====== Testimonial section start ======-->
    <section class="py-16 ta-testimonial sm:py-20 bg-secondary">
      <div class="container">
        <div class="mb-20 text-center">
          <h2 class="text-ta-section-title -mt-1.5 mb-0 font-medium">
            Testimonials
          </h2>
          <span class="inline-block mt-5 text-lg font-normal"
            >What People Think About Our Products</span
          >
        </div>
        <div
          class="grid grid-cols-1 gap-5 md:grid-cols-2 lg:grid-cols-3 lg:gap-7"
        >
          <div class="p-4 bg-white rounded-md ta-testimonial-item lg:p-6">
            <div class="flex gap-3 mb-5">
              <div class="w-20 h-20">
                <img
                  class="w-full rounded-full"
                  src="<?php echo get_template_directory_uri(); ?>/assets/images/user_01.png"
                  alt=""
                />
              </div>
              <div class="text-left">
                <h6 class="font-medium">Veronica Anluz</h6>
                <p class="mb-1">Web Developer</p>
                <ul class="flex gap-1">
                  <li>
                    <svg
                      width="16"
                      height="16"
                      class="fill-yellow-500"
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 576 512"
                    >
                      <path
                        d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"
                      />
                    </svg>
                  </li>
                  <li>
                    <svg
                      width="16"
                      height="16"
                      class="fill-yellow-500"
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 576 512"
                    >
                      <path
                        d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"
                      />
                    </svg>
                  </li>
                  <li>
                    <svg
                      width="16"
                      height="16"
                      class="fill-yellow-500"
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 576 512"
                    >
                      <path
                        d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"
                      />
                    </svg>
                  </li>
                  <li>
                    <svg
                      width="16"
                      height="16"
                      class="fill-yellow-500"
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 576 512"
                    >
                      <path
                        d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"
                      />
                    </svg>
                  </li>
                  <li>
                    <svg
                      width="16"
                      height="16"
                      class="fill-yellow-500"
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 576 512"
                    >
                      <path
                        d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"
                      />
                    </svg>
                  </li>
                </ul>
              </div>
            </div>
            <p>
              Grursus mal suada faci lisis Lorem ipsum dolarorit more and dumm
              ametion consectetur elit. Vesti dolocons rsus mal suada and the
              fadolorit to is the consectetur elit.
            </p>
          </div>
          <div class="p-4 bg-white rounded-md ta-testimonial-item lg:p-6">
            <div class="flex gap-3 mb-5">
              <div class="w-20 h-20">
                <img
                  class="w-full rounded-full"
                  src="<?php echo get_template_directory_uri(); ?>/assets/images/user_02.png"
                  alt=""
                />
              </div>
              <div class="text-left">
                <h6 class="font-medium">Jonny Miller</h6>
                <p class="mb-1">Web Designer</p>
                <ul class="flex gap-1">
                  <li>
                    <svg
                      width="16"
                      height="16"
                      class="fill-yellow-500"
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 576 512"
                    >
                      <path
                        d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"
                      />
                    </svg>
                  </li>
                  <li>
                    <svg
                      width="16"
                      height="16"
                      class="fill-yellow-500"
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 576 512"
                    >
                      <path
                        d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"
                      />
                    </svg>
                  </li>
                  <li>
                    <svg
                      width="16"
                      height="16"
                      class="fill-yellow-500"
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 576 512"
                    >
                      <path
                        d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"
                      />
                    </svg>
                  </li>
                  <li>
                    <svg
                      width="16"
                      height="16"
                      class="fill-yellow-500"
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 576 512"
                    >
                      <path
                        d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"
                      />
                    </svg>
                  </li>
                  <li>
                    <svg
                      width="16"
                      height="16"
                      class="fill-yellow-500"
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 576 512"
                    >
                      <path
                        d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"
                      />
                    </svg>
                  </li>
                </ul>
              </div>
            </div>
            <p>
              Grursus mal suada faci lisis Lorem ipsum dolarorit more and dumm
              ametion consectetur elit. Vesti dolocons rsus mal suada and the
              fadolorit to is the consectetur elit.
            </p>
          </div>
          <div class="p-4 bg-white rounded-md ta-testimonial-item lg:p-6">
            <div class="flex gap-3 mb-5">
              <div class="w-20 h-20">
                <img
                  class="w-full rounded-full"
                  src="<?php echo get_template_directory_uri(); ?>/assets/images/user_03.png"
                  alt=""
                />
              </div>
              <div class="text-left">
                <h6 class="font-medium">Peter Capidal</h6>
                <p class="mb-1">Digital Marketer</p>
                <ul class="flex gap-1">
                  <li>
                    <svg
                      width="16"
                      height="16"
                      class="fill-yellow-500"
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 576 512"
                    >
                      <path
                        d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"
                      />
                    </svg>
                  </li>
                  <li>
                    <svg
                      width="16"
                      height="16"
                      class="fill-yellow-500"
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 576 512"
                    >
                      <path
                        d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"
                      />
                    </svg>
                  </li>
                  <li>
                    <svg
                      width="16"
                      height="16"
                      class="fill-yellow-500"
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 576 512"
                    >
                      <path
                        d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"
                      />
                    </svg>
                  </li>
                  <li>
                    <svg
                      width="16"
                      height="16"
                      class="fill-yellow-500"
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 576 512"
                    >
                      <path
                        d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"
                      />
                    </svg>
                  </li>
                  <li>
                    <svg
                      width="16"
                      height="16"
                      class="fill-yellow-500"
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 576 512"
                    >
                      <path
                        d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"
                      />
                    </svg>
                  </li>
                </ul>
              </div>
            </div>
            <p>
              Grursus mal suada faci lisis Lorem ipsum dolarorit more and dumm
              ametion consectetur elit. Vesti dolocons rsus mal suada and the
              fadolorit to is the consectetur elit.
            </p>
          </div>
        </div>
      </div>
    </section>
    <!--====== Testimonial section end ======-->
 <?php get_footer(); ?>