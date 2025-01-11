<?php

/**
 * Template Name: Checkout
 */

get_template_part('header_v2');

?>
<?php while (have_posts()) : the_post(); ?>
    <section class="pt-32 pb-24 bg-white checkout">
        <div class="container px-4 m-auto text-lg font-normal prose ta-single-page lg:prose-xl">
            <?php the_content(); ?>
            <!-- .entry-content -->

        </div>
    </section>
<?php endwhile;

get_footer();
