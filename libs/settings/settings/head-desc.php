<?php
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wp_shortlink_wp_head');
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles' );
remove_action('admin_print_styles', 'print_emoji_styles');
remove_action('wp_head','rest_output_link_wp_head');
remove_action('wp_head','wp_oembed_add_discovery_links');
remove_action('wp_head','wp_oembed_add_host_js');
remove_action('template_redirect', 'rest_output_link_header', 11 );

function add_custom_head() {
    $head_array = array(
        '<meta charset="' . get_bloginfo( 'charset' ) . '">',
        '<meta name="format-detection" content="telephone=no">',
        '<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0" />',
        '<meta http-equiv="Pragma" content="no-cache" />',
        '<meta http-equiv="Cache-Control" content="no-store">',
        '<meta http-equiv="expires" content="0" />',
        base_css(),
        '<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>',
    );

    if (is_front_page()) {
        $head_array = array_merge(
            $head_array,
            array(
                '<link rel="stylesheet" href="' . get_bloginfo('template_url') . '/css/top.css'. '?' . filemtime( get_template_directory() . '/css/top.css') .'">',
            )
        );
    }elseif (is_page() || is_404()){
        $head_array = array_merge(
            $head_array,
            array(
                '<link rel="stylesheet" href="' . get_bloginfo('template_url') . '/css/top.css'. '?' . filemtime( get_template_directory() . '/css/page.css') .'">',
                )
            );
    }
$url = $_SERVER['REQUEST_URI'];

    if (is_post_type_archive()|| is_category()|| is_tag()) {
        $head_array = array_merge(
            $head_array,
            array(
                '<link rel="stylesheet" href="' . get_bloginfo('template_url') . '/css/archive.css' . '?' . filemtime( get_template_directory() . '/css/archive.css') .'">',

            )
        );
    }
    if (is_singular('news') || is_singular('works')|| is_single()) {
        $head_array = array_merge(
            $head_array,
            array(
                '<link rel="stylesheet" href="' . get_bloginfo('template_url') . '/css/single.css' . '?' . filemtime( get_template_directory() . '/css/single.css') .'">',
            )
        );
    }
    echo implode("\n", $head_array) . "\n";
}
add_action('wp_head', 'add_custom_head');

function base_css() {
        $css_array = array(
        '<link rel="stylesheet" href="' . get_bloginfo('template_url') . '/css/normalize.css'
        . '?' . filemtime( get_template_directory() . '/css/normalize.css') .'">',
        '<link rel="stylesheet" href="' . get_bloginfo('template_url') . '/css/base.css'
        . '?' . filemtime( get_template_directory() . '/css/base.css') .'">',
        '<link rel="stylesheet" href="' . get_bloginfo('template_url') . '/css/common.css'
        . '?' . filemtime( get_template_directory() . '/css/common.css') .'">',
        );
    return implode("\n", $css_array) . "\n";
}





