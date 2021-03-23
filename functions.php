<?php

add_action('wp_enqueue_scripts', 'template_scripts');

function template_scripts()
{

    // Jquery
    wp_enqueue_script('Jquery-js', '//cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js', array('jquery'), 'false', 'false');

    wp_enqueue_script('Main-js', get_template_directory_uri() . '/libraries/js/main.js', array('jquery'), 'false', 'false');

    $array = array(
        'ajaxurl'          => admin_url('admin-ajax.php'),
        'redirection_home' => home_url(),
        'loadingmessage'   => __('Sending user info, please wait...'),
    );

    wp_localize_script('Main-js', 'ajax_option', $array);

    // CSS DEL SITIO

    wp_enqueue_style('Styles-Globals', get_template_directory_uri() . '/style.css', 'null', 'false', 'all');

}
