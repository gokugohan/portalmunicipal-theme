<?php

add_action('init', 'register_library_cpt');
add_action('init', 'register_taxonomy_library_cpt');

function register_library_cpt()
{


    $labels = array(
        'name' => 'Library',
        'singular_name' => 'Library',
        'menu_name' => 'Library',
        'name_admin_bar' => 'Library',
        'parent_item_colon' => 'Parent Item:',
    );
    $args = array(
        'description' => 'Post Type Description',
        'labels' => $labels,
        'show_in_rest' => true,
        'supports' => array('title','editor'),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
//        'menu_position'       => 5,
        'query_var' => true,
        'has_archive' => true,
        'exclude_from_search' => true,
        'publicly_queryable' => true,
        'rewrite' => array('slug' => 'libraries'),
        'capability_type' => 'post',
    );
    register_post_type('library', $args);
}

function register_taxonomy_library_cpt()
{

    $labels = array(
        'name' => 'Category',
        'singular_name' => 'Category',
        'menu_name' => 'Category',
        'all_items' => 'All Categories',
    );
    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
        'publicly_queryable' => true,
        'public' => true,
        'show_ui' => true,
        'show_admin_column' => true,
        'show_in_nav_menus' => true,
        'show_tagcloud' => false,
        'show_in_rest' => true,
        'rewrite' => array(
            'slug' => 'library_category',
            'with_front' => false,
            'feeds' => true,
        ),
    );
    register_taxonomy('library_category', array('library'), $args);
}

add_action('cmb2_init', 'library_metaboxes');

function library_metaboxes()
{
    // Start with an underscore to hide fields from custom fields list
    $prefix = 'library_attachment_';

    $settings = new_cmb2_box(array(
        'id' => 'library_settings',
        'title' => 'Library settings',
        'object_types' => array('library'), // Post type
        'context' => 'normal',
        'priority' => 'high',
        'show_names' => true,

    ));

    $settings->add_field(array(
        'name' => esc_html__('Library Attachment Tétum', 'library-doc'),
        'id' => $prefix . 'file_tm',
        'type' => 'file',
        'options' => array(
            'url' => false, // Hide the text input for the url
        ),
        'query_args' => array(
            'type' => 'application/pdf', // Make library only display PDFs.
        ),
    ));
    $settings->add_field(array(
        'name' => esc_html__('Library Attachment Português', 'library-doc'),
        'id' => $prefix . 'file_pt',
        'type' => 'file',
        'options' => array(
            'url' => false, // Hide the text input for the url
        ),
        'query_args' => array(
            'type' => 'application/pdf', // Make library only display PDFs.
        ),
    ));
    $settings->add_field(array(
        'name' => esc_html__('Library Attachment English', 'library-doc'),
        'id' => $prefix . 'file_en',
        'type' => 'file',
        'options' => array(
            'url' => false, // Hide the text input for the url
        ),
        'query_args' => array(
            'type' => 'application/pdf', // Make library only display PDFs.
        ),
    ));
}
