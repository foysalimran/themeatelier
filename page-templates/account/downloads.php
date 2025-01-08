<?php
if (! defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}
?>
<div class="dashboard-entry-content file_download">
    <h4 class="text-xl font-semibold mb-5"><?php echo esc_html__('My Downloads', 'themeatelier') ?></h4>
    <?php
    echo do_shortcode('[download_history]');
    ?>
</div>