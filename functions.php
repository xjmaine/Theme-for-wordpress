<?php

function load_DWTA_enqueue(){
    // Register styles
    // wp_register_style('stylesheet', get_template_directory_uri().'/style.css', array(), false, 'all');
    wp_enqueue_style('mainStyle', get_stylesheet_uri());
    wp_enqueue_script('mainScript', get_theme_file_uri().'/assets/js/main.js');
    wp_enqueue_script('jquery','https://code.jquery.com/jquery-3.3.1.slim.min.js', NULL, "1.0", true);   
    wp_enqueue_script('minScript', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js', NULL, "1.0", true);
    wp_enqueue_script('minQuery', 'https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js', NULL, "1.0", true);
//   wp_enqueue_style();

    

}
add_action( 'wp_enqueue_scripts', 'load_DWTA_enqueue');



?>