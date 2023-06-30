<?php

function portfolio_enqueue() {
    //bootsrap icons
    wp_register_style('bootstrapicons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css', [], '1.10.5', false);
    wp_enqueue_style('bootstrapicons');

    wp_enqueue_style('customcss', get_template_directory_uri() .'/style.css', [], '1.0.0', 'all');
}

add_action('wp_enqueue_scripts', 'portfolio_enqueue');


// ADDING MENUS - HEADER AND FOOTER

function portfolio_theme_support()
{
    add_theme_support('menus');
    register_nav_menu('primary', 'Primary Header');
    register_nav_menu('secondary', 'Secondary Header');
}

add_action('init', 'portfolio_theme_support');