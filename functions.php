<?php
/*
***** Function to add style files
***** Add by Samar Mahfouz
***** Date 3/3/2021
***** version 1.0
***** wp_enqueue_style()
***** get_template_directory_uri()
*/

function AddStyleFiles() {
    wp_enqueue_style('bootstarp', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '1.0.0', 'all');
    wp_enqueue_style('fontawesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array());
    wp_enqueue_style('mainstyle', get_template_directory_uri() . '/assets/css/main.css', array());
}



/*
***** Function to add scripts files
***** Add by Samar Mahfouz
***** Date 3/3/2021
***** version 1.0
***** wp_enqueue_script()
***** get_template_directory_uri()
*/

function Set_js() {
    wp_deregister_script('jquery');
    wp_register_script('jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', array(), 1, true);
    wp_enqueue_script('jquery');
    
    wp_enqueue_script('popper', get_template_directory_uri() . '/assets/js/popper.min.js', array(), 1, true);
    
    wp_register_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), 1, true);
    wp_enqueue_script('bootstrap');
    
    wp_register_script('main', get_template_directory_uri() . '/assets/js/main.js', array(), 1, true);
    wp_enqueue_script('main');
}


/*
***** Add action
***** Add by Samar Mahfouz
***** Date 3/3/2021
***** version 1.0
***** wp_enqueue_scripts()
*/

add_action('wp_enqueue_scripts', 'AddStyleFiles');
add_action('wp_enqueue_scripts', 'set_js');

/*
***** Function to add dynamic title tag support
***** Add by Samar Mahfouz
***** Date 3/3/2021
***** version 1.0
***** add_theme_support()
***** title_tag
*/
function cw_dynamic_title() {
    add_theme_support('title-tag'); 
    add_theme_support('custom-logo'); // for adding logo
    add_theme_support('post-thumbnails');

}
add_action('after_setup_theme', 'cw_dynamic_title');


/*
***** Function to add custom menu 
***** Add by Samar Mahfouz
***** Date 3/3/2021
***** version 1.0
***** register_nav_menus()
*/
function cw_custom_menus() {
    register_nav_menus(
        array(
          'Primary' => 'Primary left menu',
        'footer'  => 'footer menu items'
        )
    );
}
add_action('init', 'cw_custom_menus');



/*
***** Function to add widget
***** Add by Samar Mahfouz
***** Date 8/3/2021
***** version 1.0
***** register_sidebar()

*/

function addmy_widget() {
    register_sidebar(
        array(
            'before_title' => '',
            'after_title' => '',
            'before_widget' => '',
            'after_widget' => '',
            'name' => 'Social links area',
            'id' => 'sidebar1',
            'description' => 'sidebar widget area'
            
        )
    );
       register_sidebar(
        array(
            'before_title' => '',
            'after_title' => '',
            'before_widget' => '',
            'after_widget' => '',
            'name' => 'footer socail media',
            'id' => 'sidebar2',
            'description' => 'sidebar widget area2'
            
        )
    );
    
}
add_action('widgets_init', 'addmy_widget');

function cw_redirect_to_homepage( $url ) {
    return home_url();
}
add_filter( 'login_redirect', 'cw_redirect_to_homepage' );



/*
***** Function to detect post views count and store it 
***** Add by Samar Mahfouz
***** Date 9/3/2021
***** version 1.0
***** register_sidebar()

*/

function cw_set_post_views($postID) {
    $count_key = 'wpb_post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);


function cw_track_post_views ($post_id) {
    if ( !is_single() ) return;
    if ( empty ( $post_id) ) {
        global $post;
        $post_id = $post->ID;    
    }
    cw_set_post_views($post_id);
}
add_action( 'wp_head', 'cw_track_post_views');


function cw_get_post_views($postID){
    $count_key = 'wpb_post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0 View";
    }
    echo $count.' Views';
}



































