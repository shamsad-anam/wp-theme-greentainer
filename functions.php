<?php

function load_css()
{
    wp_register_style("bootstrap", get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, "all");
    wp_enqueue_style("bootstrap");
    wp_register_style("main-css", get_template_directory_uri() . '/css/main.css', array(), false, "all");
    wp_enqueue_style("main-css");
}

add_action("wp_enqueue_scripts", 'load_css');

function load_js()
{
    wp_enqueue_script("jquery");
    wp_register_script('bootstrapjs', get_template_directory_uri() . "/js/bootstrap.min.js", 'jquery', false, true);
    wp_enqueue_script('bootstrapjs');
}

add_action("wp_enqueue_scripts", "load_js");
