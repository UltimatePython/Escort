<?php

function escort_files() {
    /* wp_register_script('add-bx-js1', get_template_directory_uri() . '/js/jquery.flexisel.js', array('jquery'), '', true);
    wp_register_script('add-bx-js2', get_template_directory_uri() . '/js/jquery.flexslider.js', array('jquery'), '', true);
    wp_register_script('add-bx-js3', get_template_directory_uri() . '/js/jquery.leanModal.min.js', array('jquery'), '', true);
    wp_register_script('add-bx-js4', get_template_directory_uri() . '/js/jquery.magnific-popup.js', array('jquery'), '', true);
    wp_register_script('add-bx-js5', get_template_directory_uri() . '/js/jquery.min.js', array('jquery'), '', true);
    wp_register_script('add-bx-js6', get_template_directory_uri() . '/js/responsiveslides.min.js', '1.0', null, true);*/
    wp_enqueue_script('adding-js', get_theme_file_uri('/script.js'), array(), false, true );
    wp_register_style('add-bx-css1', get_stylesheet_directory_uri() . '/css/style.css', array(), '1', 'all');
    wp_register_style('add-bx-css2', get_stylesheet_directory_uri() . '/css/bootstrap.css', array(), '1', 'all');
    wp_register_style('add-bx-css3', get_stylesheet_directory_uri() . '/css/flexslider.css', array(), '1', 'all');
    wp_register_style('add-bx-css4', get_stylesheet_directory_uri() . '/css/popuo-box.css', array(), '1', 'all');
    wp_register_style('font-awesome', get_stylesheet_directory_uri() . '/css///netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css', array(), '1', 'all');

   /* wp_enqueue_script('add-bx-js1');
    wp_enqueue_script('add-bx-js2');
    wp_enqueue_script('add-bx-js3');
    wp_enqueue_script('add-bx-js4');
    wp_enqueue_script('add-bx-js5');
    wp_enqueue_script('add-bx-js6');*/
    wp_enqueue_style('add-bx-css1');
    wp_enqueue_style('add-bx-css2');
    wp_enqueue_style('add-bx-css3');
    wp_enqueue_style('add-bx-css4');
    wp_enqueue_style('font-awesome');
}

add_action('wp_enqueue_scripts', 'escort_files');

