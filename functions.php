<?php 

    function additional_stylesheets() {
        wp_register_style( 'font-awesome1', get_template_directory_uri().'/assets/css/font-awesome.min.css' );
        wp_register_style( 'bootstrap', get_template_directory_uri().'/assets/css/bootstrap.min.css' );
        wp_register_style( 'main-styles', get_template_directory_uri().'/assets/css/main-style.css');
        wp_register_style( 'page-styles', get_template_directory_uri().'/assets/css/page-styles.css' );
        // register another file here
        wp_enqueue_style( 'bootstrap' );
        wp_enqueue_style( 'main-styles' );
        wp_enqueue_style( 'page-styles' );
        wp_enqueue_style( 'font-awesome1' );
        // enqueue another file here
    }

    function additional_scripts() {
        wp_register_script( 'jquerymin', get_template_directory_uri().'/assets/js/jquery-1.8.3.min.js');
        wp_register_script( 'scrolltop', get_template_directory_uri().'/assets/js/scrolltop.js');
        wp_register_script( 'bootstrapbundle', get_template_directory_uri().'/assets/js/bootstrap.bundle.min.js' );
        wp_register_script( 'compiledIE', get_template_directory_uri().'/assets/js/excanvas.compiled-ie.js');
        // register another file here
        wp_enqueue_script( 'jquerymin' );
        wp_enqueue_script( 'scrolltop');
        wp_enqueue_script( 'bootstrapbundle');
        wp_enqueue_script( 'compiledIE');
        // enqueue another file here
    }

    function additional_setup() {
        add_theme_support( 'post-thumbnails' ); 
    }

    function wpdocs_resize_thumbnail() {
        add_image_size( 'square-thumbnail', 200, 200, true);
    }

    add_action( 'wp_enqueue_scripts', 'additional_stylesheets' );
    add_action( 'wp_enqueue_scripts', 'additional_scripts' );
    add_action( 'after_setup_theme', 'additional_setup' );
    add_action( 'after_setup_theme', 'wpdocs_resize_thumbnail' );

 ?>