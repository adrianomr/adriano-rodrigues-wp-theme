<?php 

if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );
    //set_post_thumbnail_size( 150, 150, true ); // default Featured Image dimensions (cropped)
 
    // additional image sizes
    // delete the next line if you do not need additional image sizes
    //add_image_size( 'category-thumb', 300, 9999 ); // 300 pixels wide (and unlimited height)

    add_action( 'widgets_init', 'theme_slug_widgets_init' );
    function theme_slug_widgets_init() {
        register_sidebar( array(
            'name' => __( 'Main Sidebar', 'main-sidebar' ),
            'id' => 'main-sidebar',
            'description' => __( 'Add posts sidebar to your website.', 'main-sidebar' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s my-3">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widgettitle">',
            'after_title'   => '</h3>',
        ) );
    }

    wp_enqueue_script( 'email', get_template_directory_uri() . '/js/contact_me.js', array ( 'jquery' ), 1.1, true);
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/vendor/jquery/jquery.min.js', array ( '' ), 1.1, true);
    $site_parameters = array(
        'site_url' => get_site_url(),
        'theme_directory' => get_template_directory_uri()
        );
    wp_localize_script( 'email', 'SiteParameters', $site_parameters );
    
 }  
?>