<?php

function portfolio_enqueue() {
    //bootsrap icons
    wp_register_style('bootstrapicons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css', [], '1.10.5', false);
    wp_enqueue_style('bootstrapicons');
}

add_action('wp_enqueue_scripts', 'portfolio_enqueue');