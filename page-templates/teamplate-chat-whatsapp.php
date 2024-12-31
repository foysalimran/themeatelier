<?php

/**
 * Template Name: Chat Whatsapp
 */
get_header();
?>
<style>
    html{
        scroll-behavior: smooth;
    }
</style>
<?php
get_template_part( 'page-templates/chat-whatsapp/hero' );
get_template_part( 'page-templates/chat-whatsapp/statistics' );
get_template_part( 'page-templates/chat-whatsapp/layouts' );
get_template_part( 'page-templates/chat-whatsapp/features' );
get_template_part( 'page-templates/chat-whatsapp/offers' );
get_template_part( 'page-templates/chat-whatsapp/backend-screenshots' );
get_template_part( 'page-templates/chat-whatsapp/pricing' );
get_template_part( 'page-templates/chat-whatsapp/money-back' );
get_template_part( 'page-templates/deals-parts/faq' );
get_footer();
?>