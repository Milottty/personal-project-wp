<?php 
function ev_style(){
    wp_enqueue_style('event-style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'ev_style');

if(!function_exists('ds_menu')){
    function ds_menu(){
        register_nav_menus(array(
            'primary'=>'Primary Menu'
        ));
    }
}

add_action('after_setup_theme', 'ds_menu');


add_action('wp_enqueue_scripts', function(){
    if(is_page_template('aboutus')){
        wp_enqueue_scripts(
            'tailwind-paly', 
            'https://cdn.tailwindcss.com'
        );
    }
});

?>