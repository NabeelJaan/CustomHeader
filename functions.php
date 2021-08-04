
<?php
/*
    ==========================================
    Include scripts
    ==========================================
*/
    function customHeader_script_enqueue() {
        //css
        wp_enqueue_style('bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css', 'all');

        wp_enqueue_style('customstyle', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.0', 'all');

        //js
        wp_enqueue_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js', array(), false, false, false );
        wp_enqueue_script('bootstrapjs', '//maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js', array(),false, false, false );
        
    }

    add_action( 'wp_enqueue_scripts', 'customHeader_script_enqueue');

/*
    ==========================================
    Activate menus
    ==========================================
*/
    function customHeader_theme_setup() {
        
        add_theme_support('menus');
        
        register_nav_menu('primary', 'Primary Menu');
        register_nav_menu('secondary', 'Footer Menu');
        add_theme_support( 'title-tag' );
        
    }

    add_action('init', 'customHeader_theme_setup');

?>