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

// Smazat
include(plugin_dir_path(__FILE__) . 'src/endlinex-page.php');