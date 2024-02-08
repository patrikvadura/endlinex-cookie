<?php

namespace endlineX;

/*
* Plugin Name: EndlineX - Cookie consent
* Plugin URI: https://endline.patrikvadura.cz/endlinex
* Description: Spolehlivé a optimalizované řešení cookie consent pro váš WordPress.
* Version: 1.0
* Author: Patrik Vaďura
* Author URI: https://patrikvadura.cz
* License: GPLv2 or later versions
* License URI: http://www.gnu.org/licenses/gpl-2.0.txt
* Text Domain: endlineX
* @package EndlineX_Cookie
*/


define( 'ENDLINEX__DIR', plugin_dir_path( __FILE__ ) );

add_action('wp_enqueue_scripts', function() {
    // Styles
    wp_enqueue_style('animate', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css');
    wp_enqueue_style('style', plugins_url('static/css/main.css', __FILE__));

    // Scripts
    wp_enqueue_script('gsap-js', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/gsap.min.js', array(), false, true);
    wp_enqueue_script('apline-js', 'https://cdn.jsdelivr.net/npm/alpinejs@3.13.5/dist/cdn.min.js', array(), false, true);
    wp_enqueue_script('iconify-icon', 'https://cdn.jsdelivr.net/npm/iconify-icon@1.1.0-beta.4/dist/iconify-icon.min.js', array(), false, true);
    wp_enqueue_script('script', plugins_url('static/js/main.js', __FILE__), array('gsap-js'), false, true);
});


$folders_to_require = [
    'src/config/'
];

foreach ($folders_to_require as $folder) {
    foreach (glob(ENDLINEX__DIR . $folder . '*.php') as $file) {
        require_once $file;
    }
}

require_once ENDLINEX__DIR . 'src/endlinex-cookie.php';

EndlineXCookie::init();


// Create Cookie page
\register_activation_hook(__FILE__, __NAMESPACE__ . '\create_endlinex_cookie_page');

function create_endlinex_cookie_page()
{
    global $wpdb;

    $endlinex_page_content = '';
    $endlinex_page_title = 'Zásady používání souborů cookie';

    $endlinex_page_file_path = \plugin_dir_path(__FILE__) . 'src/config/content/page.php';
    if (\file_exists($endlinex_page_file_path)) {
        ob_start();
        include $endlinex_page_file_path;
        $endlinex_page_content = ob_get_clean();

        $args = array(
            'post_status' => 'publish',
            'post_type' => 'page',
            's' => $endlinex_page_title
        );
        $page_exists_query = new \WP_Query($args);
        $existing_page = $page_exists_query->have_posts();

        if (!$existing_page) {
            $data = [
                'title' => $endlinex_page_title,
                'content' => $endlinex_page_content,
                'slug' => 'cookie-policy',
                'status' => 'publish',
            ];

            $request = new \WP_REST_Request('POST', "/wp/v2/pages");
            $request->set_body_params($data);
            $request->set_header('content-type', 'application/x-www-form-urlencoded');

            $server = rest_get_server();

            $response = $server->dispatch($request);
        }
    } else {
        return;
    }
}

// Update Cookie page
function update_endlinex_cookie_page() {
    global $wpdb;

    $endlinex_page_title = 'Zásady používání souborů cookie';

    $endlinex_page_file_path = \plugin_dir_path(__FILE__) . 'src/config/content/page.php';
    if(\file_exists($endlinex_page_file_path)) {
        ob_start();
        include $endlinex_page_file_path;
        $endlinex_page_content = ob_get_clean();

        $args = array(
            'post_status' => 'publish',
            'post_type'   => 'page',
            's' => $endlinex_page_title
        );
        $query = new \WP_Query($args);

        if($query->have_posts()) {
            $page = $query->posts[0];

            $data = [
                'content' => $endlinex_page_content,
            ];

            $request = new \WP_REST_Request( 'PUT', "/wp/v2/pages/{$page->ID}" );
            $request->set_body_params( $data );
            $request->set_header( 'content-type', 'application/x-www-form-urlencoded' );

            $server = rest_get_server();

            $response = $server->dispatch( $request );
        }
    }
}