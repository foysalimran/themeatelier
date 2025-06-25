<?php

/**
 * Template Name: Deals
 */
get_header();
?>
<style>
    html{
        scroll-behavior: smooth;
    }
</style>
<?php
get_template_part( 'page-templates/deals-parts/hero' );
get_template_part( 'page-templates/deals-parts/wp-plugins' );
// get_template_part( 'page-templates/deals-parts/event-plugins' );
// get_template_part( 'page-templates/deals-parts/elementor-plugins' );
// get_template_part( 'page-templates/deals-parts/html-js-templates' );
get_template_part( 'page-templates/deals-parts/faq' );
get_footer();
?>