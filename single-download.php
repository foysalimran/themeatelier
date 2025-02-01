<?php
$selected_sections = get_post_meta(get_the_ID(), 'page_metabox', true);
$section_group = !empty($selected_sections) ? $selected_sections['section_group'] : [];
$select_sections = !empty($section_group) ? $section_group['select_section'] : [];
$color_settings = !empty($selected_sections) ? $selected_sections['color_settings'] : [];

get_template_part('cwp-header');
?>
<style>
    html {
        scroll-behavior: smooth;
    }

    :root {
        --primary: <?php echo esc_attr($color_settings['primary']) ?>;
        --secondary: <?php echo esc_attr($color_settings['secondary']) ?>;
        --dark: <?php echo esc_attr($color_settings['dark']) ?>;
    }
</style>
<div class="scroll_set_height"></div>
<?php

foreach ($section_group as $section) {
    $section_id = $section['select_section'];
    echo do_shortcode('[themeatelier-core id=' . $section_id . ']');
}


get_template_part('cwp-footer');
