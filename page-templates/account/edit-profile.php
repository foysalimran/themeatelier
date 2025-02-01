<?php
if (! defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}
?>
<h4 class="text-xl font-semibold mb-5"><?php echo esc_html__('Account details', 'themeatelier') ?></h4>
<?php 
echo do_shortcode( '[edd_profile_editor]' );
