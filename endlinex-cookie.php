<?php

namespace endlineX;

/*
Plugin Name: EndlineX - Cookie consent
Plugin URI: https://endline.patrikvadura.cz/endlinex
Description: Spolehlivé a optimalizované řešení cookie consent pro váš WordPress.
Version: 1.0
Author: Patrik Vaďura
Author URI: https://patrikvadura.cz
Textdomain: endlineX
*/

include(plugin_dir_path(__FILE__) . 'src/endlinex-settings.php');
include(plugin_dir_path(__FILE__) . 'src/endlinex-gtm.php');

// Styles
function enqueue_endlinex_scripts()
{
    // Styles
    wp_enqueue_style('animate', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css');
    wp_enqueue_style('endlinex-style', plugins_url('static/css/main.css', __FILE__));

    // Scripts
    wp_enqueue_script('gsap-js', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/gsap.min.js', array(), false, true);
    wp_enqueue_script('gsap-str', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/ScrollTrigger.min.js', array('gsap-js'), false, true);
    wp_enqueue_script('apline-js', 'https://cdn.jsdelivr.net/npm/alpinejs@3.13.5/dist/cdn.min.js', array(), false, true);
    wp_enqueue_script('iconify-icon', 'https://cdn.jsdelivr.net/npm/iconify-icon@1.1.0-beta.4/dist/iconify-icon.min.js', array(), false, true);
    wp_enqueue_script('endlinex-script', plugins_url('static/js/main.js', __FILE__), array('gsap-js'), false, true);
}

add_action('wp_enqueue_scripts', __NAMESPACE__ . '\enqueue_endlinex_scripts');

// Cookie consent
function endlinex_cookie()
{
    include(plugin_dir_path(__FILE__) . 'src/endlinex-cookie.php');
}

add_action('wp_footer', __NAMESPACE__ . '\endlinex_cookie');

// Create Cookie page
\register_activation_hook(__FILE__, __NAMESPACE__ . '\create_endlinex_cookie_page');

function create_endlinex_cookie_page() {
    global $wpdb; // Global object for WordPress Database interaction

    // Loading the page contents from an external file
    $endlinex_page_content = '';
    $endlinex_page_title = 'Zásady používání souborů cookie';

    $endlinex_page_file_path = \plugin_dir_path(__FILE__) . 'src/endlinex-page.php';
    if(\file_exists($endlinex_page_file_path)) {
        ob_start();
        include $endlinex_page_file_path;
        $endlinex_page_content = ob_get_clean();

        $args = array(
            'post_status' => 'publish',
            'post_type'   => 'page',
            's' => $endlinex_page_title
        );
        $page_exists_query = new \WP_Query($args);
        $existing_page = $page_exists_query->have_posts();

        if(!$existing_page) {
            // The data to update
            $data = [
                'title' => $endlinex_page_title,
                'content' => $endlinex_page_content,
                'slug' => 'cookie-policy',
                'status' => 'publish',
            ];

            $request = new \WP_REST_Request( 'POST', "/wp/v2/pages" );
            $request->set_body_params( $data );
            $request->set_header( 'content-type', 'application/x-www-form-urlencoded' );

            // Get an instance of the WP_REST_Server
            $server = rest_get_server();

            // Call the dispatch method with your request
            $response = $server->dispatch( $request );
        }
    } else {
        return;
    }
}