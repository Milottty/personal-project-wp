<?php


function ds_style() {
    wp_enqueue_style(
        'event-style',
        get_stylesheet_uri(),       // loads style.css
        array(),
        wp_get_theme()->get('Version')
    );
}

add_action('wp_enqueue_scripts', 'ds_style');
