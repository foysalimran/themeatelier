<?php

/**
 * Template Name: Checkout
 */

get_template_part('header_v2');

?>
<?php while (have_posts()) : the_post(); ?>

    <section class="pt-40 bg-white">
        <div class="container text-center">
            <h1 class="mb-0 text-4xl font-bold"><?php the_title() ?></h1>
        </div>
    </section>
    <section class="pt-16 pb-24 bg-white  checkout">
        <div class="container px-4 m-auto text-lg font-normal sp-single-page prose lg:prose-xl">
            <?php the_content(); ?>
            <!-- .entry-content -->

        </div>
    </section>
<?php endwhile;

get_footer();
