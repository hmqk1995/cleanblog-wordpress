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

    /* styles */
    wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/clean-blog.min.css');
    wp_enqueue_style('style', get_stylesheet_uri());

    /* javascripts */
    wp_enqueue_script('js', get_template_directory_uri() . '/assets/js/clean-blog.min.js', array('jquery'));

}

add_action('wp_enqueue_scripts', 'cleanblog_scripts');

?>