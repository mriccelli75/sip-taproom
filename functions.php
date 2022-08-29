<?php
/* Enqueue scripts and styles
*/

if( !function_exists ( 'sip_taproom_theme_setup') ) {
    
    /* Theme Setup */

    function sip_taproom_theme_setup() {
        load_theme_textdomain('sipt-taproo', get_template_directory( ) . '/languages' );
        add_theme_support( 'title-tage');
        add_theme_support( 'post-thumbnails');
        add_theme_support (
            'html5',
            array (
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption'
            )
            );
            
            add_theme_support( 'customize-selective-refresh-widgets' );
            add_theme_support( 'responsive-embeds' );

            register_nav_menus (
                array (
                    'primary'    =>   __('Primary Menu', 'sip-taproom')
                )
                
            );  
    }
    function add_additional_class_on_a($classes, $item, $args) {
            if (isset($args->add_a_class)) {
                $classes['class'] = $args->add_a_class;
            }
            return $classes;
}

add_filter('nav_menu_link_attributes', 'add_additional_class_on_a', 1, 3);
}

add_action( 'after_setup_theme', 'sip_taproom_theme_setup');

function sip_taproom_assets() {

// Enqueue CSS files
wp_enqueue_style( 'google-font', 'https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;1,300&display=swap', array(), '1.0', 'all');
wp_enqueue_style( 'bootstrap', get_theme_file_uri('vendor/bootstrap.min.css'), array(), '5.2.0', 'all');

//Main CSS file  
wp_enqueue_style('sip-tapproom', get_bloginfo('template_directory').'/style.css');



// Enqueue Javascript files
wp_enqueue_script( 'bootstrap', get_theme_file_uri() . '/vendor/bootstrap.bundle.min.js', array(), '1.0.0', true );

wp_enqueue_script( 'sip-taproom', get_theme_file_uri() . '/assets/js/main.js', array(), '1.0.0', true );
if ( is_singular() && comments_open() && get_option( 'thread_comments')) {
    wp_enqueue_script('comment-reply');
}
    
}


add_action( 'wp_enqueue_scripts', 'sip_taproom_assets');

?>