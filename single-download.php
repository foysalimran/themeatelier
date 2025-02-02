<?php
$selected_sections = get_post_meta(get_the_ID(), 'page_metabox', true);
$section_group = isset($selected_sections['section_group']) ? $selected_sections['section_group'] : '';
$select_sections = isset($section_group['select_section']) ? $section_group['select_section'] : '';
$color_settings = isset($selected_sections['color_settings']) ? $selected_sections['color_settings'] : '';

$primary_color = isset($color_settings['primary']) ? $color_settings['primary'] : '#0F8C7E';
$secondary_color = isset($color_settings['secondary']) ? $color_settings['secondary'] : '#F0FDFA';
$dark_color = isset($color_settings['dark']) ? $color_settings['dark'] : '#111111';

// get_template_part('cwp-header');
?>
<style>
    html {
        scroll-behavior: smooth;
    }

    :root {
        --primary: <?php echo esc_attr($primary_color) ?>;
        --secondary: <?php echo esc_attr($secondary_color) ?>;
        --dark: <?php echo esc_attr($dark_color) ?>;
    }
</style>
<div class="scroll_set_height"></div>
<?php

if (is_plugin_active('themeatelier-core/themeatelier-core.php')) {
    foreach ($section_group as $section) {
        $section_id = $section['select_section'];
        echo do_shortcode('[themeatelier-core id=' . $section_id . ']');
    }
}

get_template_part('cwp-footer');
