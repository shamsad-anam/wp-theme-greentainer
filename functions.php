<?php

//add css links
function load_css()
{
    wp_register_style("bootstrap", get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, "all");
    wp_enqueue_style("bootstrap");
    wp_register_style("main-css", get_template_directory_uri() . '/css/main.css', array(), false, "all");
    wp_enqueue_style("main-css");
}

add_action("wp_enqueue_scripts", 'load_css');

//add scripts
function load_js()
{
    wp_enqueue_script("jquery");
    wp_register_script('bootstrapjs', get_template_directory_uri() . "/js/bootstrap.min.js", 'jquery', false, true);
    wp_enqueue_script('bootstrapjs');
}

add_action("wp_enqueue_scripts", "load_js");

//theme options
add_theme_support("menus");
add_theme_support("post-thumbnails");
add_theme_support("widgets");

//menus
register_nav_menus(array(
    "top-menu" => "Top Menu Location",
    "mobile-menu" => "Mobile Menu Location",
    "footer-menu" => "Footer Menu Location",
));

//Custom Image Sizes
add_image_size("post-large", 800, 400, true);
add_image_size("post-small", 300, 200, true);
add_image_size("post-tiny", 150, 150, true); //HOW To use this??


//Register Sidebars
function my_sidebar(){
  register_sidebar(
    array(
      "name" => "Page Side Bar",
      "id" => "page-sidebar",
      "before_title" => "<h5 class='widget-title'>",
      "after_title" => "</h5>"
    )
  );
  register_sidebar(
    array(
      "name" => "Blog Side Bar",
      "id" => "blog-sidebar",
      "before_title" => "<h5 class='widget-title'>",
      "after_title" => "</h5>"
    )
  );
}

add_action("widgets_init", "my_sidebar");

//custom post type
function my_post_type(){
  $args = array(
    "labels" => array(
      "name" => "Cars",
      "singular_name" => "Car",
    ),
    "public" => true,
    "has_archive" => true,
    "menu_icon" => "dashicons-car",
    "supports" => array("title", "editor", "thumbnail", "custom-fields"),
  );
  register_post_type("cars", $args);
  //this 'cars' will be the suffix of this post type's single and archive page
}

add_action("init", "my_post_type");

//taxonomy for custom post type

function my_taxonomy(){
  $args = array(
    "labels" => array(
      "name" => "Brands",
      "singular_name" => "Brand",
    ),
    "public" => true,
    "hierarchical" => true,
  );

  register_taxonomy("brands", array("cars"), $args);
}

add_action("init", "my_taxonomy"); 