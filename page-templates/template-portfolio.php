<?php
/*
 * Template Name: Portfolio
 */
get_header(); ?>
<!--====== Page title start ======-->
<section class="h-[380px] bg-secondary">
    <div class="container text-center">
        <h1 class="text-3xl sm:text-4xl font-bold pt-44 mb-0"><?php the_title(); ?></h1>
        <p class="text-lg mt-5">
            <?php the_content(); ?>
        </p>
    </div>
</section>
<!--====== Page title end ======-->
<!--====== Plugin list start ======-->
<section class="ta-case-study py-20">
    <div class="container">
        <h3 class="mb-5"><?php the_title(); ?></h3>
        <p><?php the_content(); ?></p>
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mt-16">

            <?php
            $args = array(
                'post_type' => 'portfolio',
                'post_per_page' => 9,
            );
            $the_query = new WP_Query($args);
            while ($the_query->have_posts()) {
                $the_query->the_post();
            ?>

                <div class="shadow-ta-box-shadow rounded border border-secondary overflow-hidden">
                    <div class="post-thumbnail">
                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                            <?php the_post_thumbnail(); ?>
                        </a>
                    </div>
                    <div class="p-5 px-[30px] pb-[26px]">
                        <div class="text-[13px] font-medium text-primary">
                            <?php the_category(); ?>
                        </div>

                        <h3 class="text-lg leading-6 font-medium mt-3 mb-2">
                            <a class="text-font-color hover:text-primary" href="<?php the_permalink(); ?>">
                                <?php the_title(); ?>
                            </a>
                        </h3>
                        <p>
                            <?php the_excerpt(); ?>
                        </p>
                    </div>
                </div>
            <?php
            }
            wp_reset_postdata();
            ?>

        </div>
    </div>
    </div>
</section>
<!--====== Plugin list end ======-->

<?php get_footer(); ?>