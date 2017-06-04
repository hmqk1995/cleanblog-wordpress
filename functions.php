<?php
/**
 * Created by PhpStorm.
 * User: luke
 * Date: 17/6/4
 * Time: 1:59 PM
 */

/**
 *
 *  register menus
 *
 */

function register_my_menu() {
    register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );


/**
 *
 *  including css and javascript files
 *
 */
function cleanblog_scripts() {

    /* bootstrap */
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'));

    /* font-awesome */
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css');

    /* fonts */
    wp_enqueue_style('googlefont1', '//fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic');
    wp_enqueue_style('googlefont2', '//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800');

    /* HTML5 IE Support scripts */
    wp_enqueue_script('html5shiv', '//oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js');
    wp_script_add_data( 'html5shiv', 'conditional', 'lt IE 9' );
    wp_enqueue_script('respond', '//oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js');
    wp_script_add_data( 'respond', 'conditional', 'lt IE 9' );

    /* styles */
    wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/clean-blog.min.css');
    wp_enqueue_style('style', get_stylesheet_uri());

    /* javascripts */
    wp_enqueue_script('js', get_template_directory_uri() . '/assets/js/clean-blog.min.js', array('jquery'));

}

add_action('wp_enqueue_scripts', 'cleanblog_scripts');

?>