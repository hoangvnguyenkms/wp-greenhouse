<?php 

    function additional_stylesheets() {
        wp_register_style( 'bootstrap', get_template_directory_uri().'/assets/css/bootstrap.min.css' );
        wp_register_style( 'slider-base', get_template_directory_uri().'/assets/css/advanced-slider-base.css');
        wp_register_style( 'main-styles', get_template_directory_uri().'/assets/css/main-style.css');
        wp_register_style( 'page-styles', get_template_directory_uri().'/assets/css/page-styles.css' );
        // register another file here

        wp_enqueue_style( 'bootstrap' );
        wp_enqueue_style( 'slider-base' );
        wp_enqueue_style( 'main-styles' );
        wp_enqueue_style( 'page-styles' );
        // enqueue another file here
    }

    function additional_setup() {
        add_theme_support( 'post-thumbnails' ); 
    }

    function wpdocs_resize_thumbnail() {
        add_image_size( 'square-thumbnail', 200, 200, true);
    }

    add_action( 'wp_enqueue_scripts', 'additional_stylesheets' );
    add_action( 'after_setup_theme', 'additional_setup' );
    add_action( 'after_setup_theme', 'wpdocs_resize_thumbnail' );

 ?>