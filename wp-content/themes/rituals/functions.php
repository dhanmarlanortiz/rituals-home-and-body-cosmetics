<?php

function rituals_register_styles() {
    $version = wp_get_theme()->get('Version');

    wp_enqueue_style('rituals-owl-carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css', array(), '2.3.4', 'all');
    wp_enqueue_style('rituals-owl-theme', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css', array(), '2.3.4', 'all');
    wp_enqueue_style('rituals-main', get_template_directory_uri() . "/assets/css/main.css", array(), $version, 'all');
}

add_action('wp_enqueue_scripts', 'rituals_register_styles');


function rituals_register_scripts() {
    $version = wp_get_theme()->get('Version');

    wp_enqueue_script('rituals-jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js', array(), '3.6.3', true);
    wp_enqueue_script('rituals-owl-carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js', array(), '2.3.4', true);
    wp_enqueue_script('rituals-main', get_template_directory_uri() . "/assets/js/main.js", array(), $version, true);
}

add_action('wp_enqueue_scripts', 'rituals_register_scripts');