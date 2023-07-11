<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
<section class="">
      <div class="container px-4 m-auto text-center">
        <h1 class="pt-40 mb-0 text-4xl "><?php the_title(); ?></h1>
      </div>
    </section>
    
    <section class="pt-16 pb-24 bg-white">
      <div class="container px-4 m-auto text-lg font-normal sp-single-page">
        <article
          id="page-475"
          class="post-475 page type-page status-publish hentry"
        >
          <div class="entry-content">
            <?php the_content(); ?>
          </div>
          <!-- .entry-content -->
        </article>
      </div>
    </section>
<?php endwhile; ?>
<?php get_footer(); ?>