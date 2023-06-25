<?php get_header(); ?>
<!--====== Section title start ======-->
<section class="h-[380px] bg-secondary">
  <div class="container text-center">
    <h1 class="mb-0 text-3xl font-bold sm:text-4xl pt-44">
      <?php _e('The Themeatelier Blog', 'themeateler'); ?>
    </h1>
    <p class="mt-5 text-lg">
      <?php _e('Get Updated with latest Tips, Tutorials, Inspirations and Collections', 'themeatelier'); ?>
    </p>
  </div>
</section>
<!--====== Section title end ======-->
<!--====== Blog section start ======-->
<div class="py-16 sm:py-20">
  <div class="container">
    <div class="flex flex-col justify-between gap-4 mb-8 md:flex-row">
      <h3 class="text-2xl font-medium">Blog & Stories</h3>
      <div class="flex flex-col items-center gap-4 sm:flex-row">
        <form class="border-b border-b-secondary flex gap-2 items-center w-full md:w-[250px] py-2">
          <svg width="16" height="16" class="fill-font-color-light" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
            <path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z" />
          </svg>
          <input class="w-full bg-inherit focus:outline-none" type="text" placeholder="<?php _e('Search blog', 'themeatelier'); ?>" />
        </form>
        <select class="block w-full px-3 py-2 mt-1 bg-white border rounded-md md:w-44 border-secondary focus:outline-none focus:ring-primary focus:border-indigo-500 sm:text-sm">
          <option value="all-topics">All Topics</option>
          <option value="plugins">Plugins</option>
          <option value="gutenberg">Gutenberg</option>
          <option value="themes">Themes</option>
          <option value="lms">LMS</option>
          <option value="general">General</option>
        </select>
      </div>
    </div>
    <div class="items-center block grid-cols-6 overflow-hidden border rounded shadow-ta-box-shadow lg:grid border-secondary">
      <div class="col-span-3 p-9">
        <div class="text-sm font-medium text-primary">
          <a href="#" rel="category tag">Tips &amp; Tricks</a>
        </div>
        <h2 class="mt-5 mb-0 text-2xl font-medium">
          <a class="text-font-color hover:text-primary" href="blog-details.html">How to Add Our Team Page in WordPress Easily</a>
        </h2>
        <p class="mt-5">
          Our team page is a necessary element of any business website. As a
          result, It helps your business in many
        </p>
        <span class="flex justify-between mt-3 text-xs font-normal text-font-color-light">
          <span>By
            <a class="hover:text-primary" href="#" rel="author">Md. Khalil</a>
          </span>
          <span class="flex items-center gap-2">
            <svg width="14" height="14" class="fill-font-color-light" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
              <path d="M152 24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H64C28.7 64 0 92.7 0 128v16 48V448c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V192 144 128c0-35.3-28.7-64-64-64H344V24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H152V24zM48 192h80v56H48V192zm0 104h80v64H48V296zm128 0h96v64H176V296zm144 0h80v64H320V296zm80-48H320V192h80v56zm0 160v40c0 8.8-7.2 16-16 16H320V408h80zm-128 0v56H176V408h96zm-144 0v56H64c-8.8 0-16-7.2-16-16V408h80zM272 248H176V192h96v56z" />
            </svg>
            Aug 9, 2022
          </span>
        </span>
      </div>


      <div class="flex-shrink-0 col-span-3 post-thumbnail">
        <a href="blog-details.html" title="How to Add Our Team Page in WordPress Easily"><img width="800" height="400" src="assets/images/our-team-page.png" class="object-cover w-full ml-auto mr-0 img-responsive wp-post-image entered lazyloaded" alt="" decoding="async" sizes="(max-width: 800px) 100vw, 800px" srcset="
                  assets/images/our-team-page.png         800w,
                  assets/images/our-team-page-300x150.png 300w,
                  assets/images/our-team-page-768x384.png 768w
                " />
        </a>
      </div>
    </div>
    <div class="grid gap-8 mt-16 md:grid-cols-2 lg:grid-cols-3">


      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <div class="overflow-hidden border rounded shadow-ta-box-shadow border-secondary">
            <div class="post-thumbnail">
              <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                <?php the_post_thumbnail('medium_large'); ?>
              </a>
            </div>
            <div class="p-5 px-[30px] pb-[26px]">
              <div class="text-[13px] font-medium text-primary">

                <?php the_category(', ', '', ''); ?>
              </div>

              <h3 class="mt-3 mb-0 text-lg font-medium leading-6">
                <a class="text-font-color hover:text-primary break-all" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              </h3>
              <span class="flex justify-between mt-3 text-xs font-normal text-font-color-light">
                <span>By
                  <a class="hover:text-primary" href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" rel="author"><?php the_author(); ?></a>
                </span>
                <span class="flex items-center gap-2">
                  <svg width="14" height="14" class="fill-font-color-light" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                    <path d="M152 24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H64C28.7 64 0 92.7 0 128v16 48V448c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V192 144 128c0-35.3-28.7-64-64-64H344V24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H152V24zM48 192h80v56H48V192zm0 104h80v64H48V296zm128 0h96v64H176V296zm144 0h80v64H320V296zm80-48H320V192h80v56zm0 160v40c0 8.8-7.2 16-16 16H320V408h80zm-128 0v56H176V408h96zm-144 0v56H64c-8.8 0-16-7.2-16-16V408h80zM272 248H176V192h96v56z" />
                  </svg>

                  <?php echo get_the_time('F j, Y'); ?>
                </span>
              </span>
            </div>
          </div>

        <?php endwhile;
      else : ?>
        <p><?php esc_html_e('Sorry, no posts matched your criteria.', 'themeatelier'); ?></p>
      <?php endif; ?>



    </div>
    <div class="mt-12">

      <div class="ta-pagination">
        <?php the_posts_pagination(
          array(
            "screen_reader_text" => ' ',
            "prev_text"          => '<svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 320 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L77.3 256 246.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-192 192z"/></svg>',
            "next_text"          => '<svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 320 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"/></svg>'
          )
        ) ?>
      </div>
    </div>
  </div>
</div>
<!--====== Blog section end ======-->
<?php get_footer(); ?>