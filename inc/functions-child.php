<?php

// Dequeue parent styles for re-enqueuing in the correct order
function dequeue_parent_style()
{
	wp_dequeue_style('tna-styles');
	wp_deregister_style('tna-styles');
}

// Enqueue styles in correct order
function tna_child_styles()
{
	wp_register_style('tna-parent-styles', get_template_directory_uri() . '/css/base-sass.min.css', array(),
		EDD_VERSION, 'all');
	wp_register_style('tna-child-styles', get_stylesheet_directory_uri() . '/css/child-sass.min.css', array(), '0.1', 'all');
	wp_enqueue_style('tna-parent-styles');
	wp_enqueue_style('tna-child-styles');
}

function tna_child_scripts()
{
    if (is_page_template('page-portal-landing.php')) {
        wp_register_script('stories-resource-script', get_stylesheet_directory_uri() . '/js/stories-resource-script.js', array(), '1.0');
        wp_enqueue_script( 'stories-resource-script' );
    }
}
