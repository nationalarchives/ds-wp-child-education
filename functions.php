<?php

include 'inc/functions-globals.php';
include 'inc/functions-identify-environment.php';
include 'inc/functions-admin.php';

// For breadcrumbs and URLs
function tnatheme_globals() {
    global $pre_path;
    global $pre_crumbs;
    if (isset($_SERVER['HTTP_X_NGINX_PROXY'])) {
        $pre_crumbs = array(
            'Education' => '/education/'
        );
        $pre_path = '/education';
    } elseif (substr($_SERVER['REMOTE_ADDR'], 0, 3) === '10.') {
        $pre_path = '';
        $pre_crumbs = array(
            'Education' => '/'
        );
    } else {
        $pre_crumbs = array(
            'Education' => '/education/'
        );
        $pre_path = '/education';
    }
}
// If web development machine
if ( $_SERVER['SERVER_ADDR'] !== $_SERVER['REMOTE_ADDR'] ) {
        tnatheme_globals();
    } else {
        $pre_path = '';
        $pre_crumbs = array(
            'Education' => '/'
    );
}

// Dequeue parent styles for re-enqueuing in the correct order
function dequeue_parent_style() {
    wp_dequeue_style('tna-styles');
    wp_deregister_style('tna-styles');
}
add_action( 'wp_enqueue_scripts', 'dequeue_parent_style', 9999 );
add_action( 'wp_head', 'dequeue_parent_style', 9999 );

// Enqueue styles in correct order
function tna_child_styles() {
    wp_register_style( 'tna-parent-styles', get_template_directory_uri() . '/css/base-sass.min.css', array(), EDD_VERSION, 'all' );
    wp_register_style( 'tna-child-styles', get_stylesheet_directory_uri() . '/style.css', array(), '0.1', 'all' );
    wp_enqueue_style( 'tna-parent-styles' );
    wp_enqueue_style( 'tna-child-styles' );
}

function tna_child_scripts()
{
    if (is_page_template('page-portal-landing.php')) {
        wp_register_script('jquery-3.5.1', get_stylesheet_directory_uri() . '/js/jquery-3.5.1.min.js', array(), '1.0');
        wp_enqueue_script( 'jquery-3.5.1' );
    }
    if(is_page_template('outreach/stories-resource.php')){
        wp_register_script('jquery-3.5.1', get_stylesheet_directory_uri() . '/js/jquery-3.5.1.min.js', array(), '1.0');
        wp_enqueue_script( 'jquery-3.5.1' );
        wp_register_script('stories-resource-script', get_stylesheet_directory_uri() . '/js/stories-resource-script.js', array(), '1.0');
        wp_enqueue_script( 'stories-resource-script' );
    }
}

add_action( 'wp_enqueue_scripts', 'tna_child_styles' );
add_action( 'wp_enqueue_scripts', 'tna_child_scripts' );
add_action( 'init', 'stories_resource_metaboxes' );
add_action( 'init', 'stories_home_metaboxes' );
