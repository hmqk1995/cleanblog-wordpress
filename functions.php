<?php
/**
 * Created by PhpStorm.
 * User: luke
 * Date: 17/6/4
 * Time: 1:59 PM
 */

function cleanblog_scripts() {
    /* bootstrap */
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.min.css');
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/bootstrap/js/bootstrap.min.js');
    /* styles */
    wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/clean-blog.min.css');
}

add_action('wp_enqueue_scripts', 'cleanblog_scripts');

?>