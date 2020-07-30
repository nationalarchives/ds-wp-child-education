<?php
function stories_resource_metaboxes() {
    if ( isset( $_GET['post'] ) ) {
        $post_id = $_GET['post'];
    } else {
        if ( isset( $_POST['post_ID'] ) ) {
            $post_id = $_POST['post_ID'];
        } else {
            $post_id = '';
        }
    }
    if ( ! isset( $post_id ) ) {
        return;
    }
    $stories_resource_metabox_array = array(
        array(
            'id'       => 'page_options',
            'title'    => 'Stories resource options',
            'pages'    => 'page',
            'context'  => 'normal',
            'priority' => 'low',
            'fields'   => array(
                array(
                    'name' => 'Stories resource H2',
                    'desc' => '',
                    'id'   => 'stories_resource_h2_1',
                    'type' => 'text',
                    'std'  => ''
                ),
                array(
                    'name' => 'Stories resource audio link',
                    'desc' => '',
                    'id'   => 'stories_resource_audio_link',
                    'type' => 'textarea',
                    'std'  => ''
                ),
                array(
                    'name' => 'Stories resource H2',
                    'desc' => '',
                    'id'   => 'stories_resource_h2_2',
                    'type' => 'text',
                    'std'  => ''
                ),
                array(
                    'name' => 'Stories resource questions',
                    'desc' => '',
                    'id'   => 'stories_resource_questions',
                    'type' => 'textarea',
                    'std'  => ''
                ),
                array(
                    'name' => 'Stories resource H2',
                    'desc' => '',
                    'id'   => 'stories_resource_h2_3',
                    'type' => 'text',
                    'std'  => ''
                ),
                array(
                    'name' => 'Stories resource "Do you know"',
                    'desc' => '',
                    'id'   => 'stories_resource_do_you_know',
                    'type' => 'textarea',
                    'std'  => ''
                )
            )
        )
    );
    $template_file      = get_post_meta( $post_id, '_wp_page_template', true );
    if ( $template_file == 'stories-resource.php' ) {
        $stories_resource_metabox_array = new CreateMetaBox( $stories_resource_metabox_array[0] );
    }
}

function stories_home_metaboxes() {
    if ( isset( $_GET['post'] ) ) {
        $post_id = $_GET['post'];
    } else {
        if ( isset( $_POST['post_ID'] ) ) {
            $post_id = $_POST['post_ID'];
        } else {
            $post_id = '';
        }
    }
    if ( ! isset( $post_id ) ) {
        return;
    }

    $stories_home_metabox_array = array(
        array(
            'id'       => 'stories_home_options',
            'title'    => 'Stories home options',
            'pages'    => 'page',
            'context'  => 'normal',
            'priority' => 'high',
            'fields'   => array(
                array(
                    'name' => 'Stories home guidance',
                    'desc' => '',
                    'id'   => 'stories_home_guidance',
                    'type' => 'textarea',
                    'std'  => ''
                )
            )
        )
    );

    $template_file      = get_post_meta( $post_id, '_wp_page_template', true );
    if ( $template_file == 'page-portal-landing.php' ) {
        $stories_home_metabox_array = new CreateMetaBox( $stories_home_metabox_array[0] );
    }
}
