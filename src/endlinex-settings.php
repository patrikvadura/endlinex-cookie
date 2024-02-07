<?php

namespace endlineX;

function endlinex_add_admin_menu() {
    add_menu_page(
        'EndlineX - Cookie consent',
        'EndlineX',
        'manage_options',
        'endlinex',
        __NAMESPACE__ . '\endlinex_settings_page_html',
        'dashicons-admin-plugins',
        20
    );

    // Vytvoření nastavení během inicializace admin menu
    add_action('admin_init', __NAMESPACE__ . '\endlinex_settings_init');
}

add_action('admin_menu', __NAMESPACE__ . '\endlinex_add_admin_menu');

function endlinex_settings_init() {
    register_setting('endlinex', 'endlinex_gtm_id', array(
        'type' => 'string',
        'default' => NULL,
    ));

    add_settings_section(
        'endlinex_gtm_section',
        'Google Tag Manager',
        function() {
            echo '<p>Zadejte své GTM ID:</p>';
        },
        'endlinex'
    );

    add_settings_field(
        'endlinex_gtm_field',
        'GTM ID',
        __NAMESPACE__ . '\endlinex_gtm_field_html',
        'endlinex',
        'endlinex_gtm_section'
    );
}

function endlinex_gtm_field_html() {
    $gtm_id = get_option('endlinex_gtm_id');
    echo '<input type="text" name="endlinex_gtm_id" value="' . $gtm_id . '" />';
}

function endlinex_settings_page_html() {
    if (!current_user_can('manage_options')) {
        return;
    }

    echo '<div class="wrap">';
    echo '<h1>'. esc_html(get_admin_page_title()) . '</h1>';
    echo '<form action="options.php" method="post">';
    settings_fields('endlinex');
    do_settings_sections('endlinex');
    submit_button('Uložit nastavení');
    echo '</form>';
    echo '</div>';
}