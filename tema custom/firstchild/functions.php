<?php
    
    if ( ! function_exists( 'firstchild_setup' ) ) :
        
        function firstchild_setup() {
            /**
             * Add default posts and comments RSS feed links to <head>.
             */
            add_theme_support( 'title-tag' );
            /**
             * Enable support for post thumbnails and featured images.
             */
            add_theme_support( 'post-thumbnails' );
            /**
             * Enable custom logo
             */
            add_theme_support( 'custom-logo');
            /**
             * Add support for two custom navigation menus.
             */
            register_nav_menus(array(
                register_nav_menu('primary', __('Primary Menu', 'first_child')),
                register_nav_menu('footer', __('Footer Menu', 'first_child')),
            ));
                
            /**
             * Enable support for the following post formats:
             * aside, gallery, quote, image, and video
             */
            add_theme_support( 'post-formats', array( 'aside', 'gallery', 'quote', 'image', 'video' ) );
        }
    endif; // myfirsttheme_setup
    add_action( 'after_setup_theme', 'firstchild_setup' );


    
    /*  Enqueue css
    /* ------------------------------------ */ 
      function firstchild_styles() {
    
        wp_enqueue_style( 'slug-theme-style', get_template_directory_uri().'/style.css');
    
       }
    add_action( 'wp_enqueue_scripts', 'firstchild_styles' );
    

  
?>


