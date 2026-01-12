<?php
function ac_milan_theme_setup() {
    register_nav_menus(array(
        'main_menu' => __('Main Menu', 'ac-milan-theme'),
    ));
}
add_action('after_setup_theme', 'ac_milan_theme_setup');

function ac_milan_enqueue_styles() {
    wp_enqueue_style(
        'ac-milan-style',
        get_stylesheet_uri(),
        array(),
        time() // force reload
    );
}
add_action('wp_enqueue_scripts', 'ac_milan_enqueue_styles');
