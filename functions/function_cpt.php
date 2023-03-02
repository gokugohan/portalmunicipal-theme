<?php

require_once('custom_function.php');

function admin_enqueue_datepicker_styles()
{
//        wp_enqueue_style('jquery-ui-style', '//ajax.googleapis.com/ajax/libs/jqueryui/1.8.1/themes/smoothness/jquery-ui.css', true);

}

add_action('admin_enqueue_scripts', 'admin_enqueue_datepicker_styles');

function admin_enqueue_datepicker_scripts()
{
//        wp_enqueue_script('jquery-ui-datepicker');
}

add_action('admin_enqueue_scripts', 'admin_enqueue_datepicker_scripts');

/*
 * +++++++++++++++++++++++++++++++++++++++++++++
 * */

flush_rewrite_rules(false);

// Change default "Enter Title Here" text for admin area based on CPT
function change_default_title($title)
{
    $screen = get_current_screen();
    if ('events' == $screen->post_type) {
        $title = 'Enter new event name here';
    }
    return $title;
}
//add_filter( 'enter_title_here', 'change_default_title' );
