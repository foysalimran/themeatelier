<?php
if (! defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}
?>
<div class="p-10 w-full dashboard-entry-content">
    <h4 class="text-xl font-semibold mb-5"><?php echo esc_html__('My Downloads', 'themeatelier') ?></h4>
    <?php
    echo do_shortcode('[download_history]');
    ?>
</div>