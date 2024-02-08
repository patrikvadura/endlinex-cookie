<?php

namespace endlineX;

function endlineX_custom_admin_header() {
    echo '
    <div style="box-shadow:-20px 0 0 #242E34; width: 100%; height: 17rem; display: flex; align-items: center; position: relative; overflow: hidden;">
        <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" style="position: absolute; z-index: 0; width: 100%;" viewBox="0 0 1920 600">
          <path d="M0 0h1920v600H0z" style="fill:#242e34"/>
          <clipPath id="a">
            <path d="M0 0h1920v600H0z"/>
          </clipPath>
          <g clip-path="url(#a)">
            <path d="m1415.8 360-445 445a28.5 28.5 0 0 1-40.2-40.4l445-445L1247 191.2a28.5 28.5 0 0 1 40.3-40.2l128.5 128.5 431-430.9a28.5 28.5 0 0 1 40.2 40.3l-431 430.9 93.6 93.5a28.5 28.5 0 0 1-40.2 40.3l-93.6-93.5Z" style="fill:#03e987"/>
          </g>
        </svg>
    
        <div style="flex: 1; position: relative; z-index: 1;">
            <h1 style="font-size: 3rem; font-weight: bold; color: #fff;">Nastavení cookie</h1>
            <h3 style="color: #fff;">Přizpůsobte nastavení cookie vašeho webu</h3>
            
            <div style="display: flex; align-items: center; margin-top: 2rem; color: #fff;">
                Powered by 
                <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" clip-rule="evenodd" viewBox="0 0 201 44" width="100" style="margin-left: .5rem;">
                  <path fill="#fff" d="M4 23.5c0 .4.2.7.4 1 .3.6.8 1 1.4 1.3a5.2 5.2 0 0 0 4 .1c.6-.2 1-.5 1.5-1l2.2 2.4c-.7.7-1.5 1.2-2.4 1.6-1 .4-2 .6-3.3.6-1.5 0-3-.3-4.1-1a6.8 6.8 0 0 1-3.7-6 6.8 6.8 0 0 1 3.6-6.1c1-.7 2.3-1 3.7-1 1.3 0 2.6.3 3.6.8 1.1.6 2 1.4 2.6 2.5a7.3 7.3 0 0 1 .8 4.8H4Zm0-2.3h6.7c0-.4-.2-.8-.4-1.1-.3-.6-.7-1-1.2-1.3-.5-.3-1-.4-1.8-.4-.7 0-1.2.1-1.8.4A3.6 3.6 0 0 0 4 21.2Zm19.4-4a5 5 0 0 1 1.4-1c1-.6 2-.8 3.1-.8s2 .2 3 .6c.8.5 1.5 1.1 2 2 .5.9.7 2 .7 3.4v7.9h-4V22c0-1-.2-1.9-.7-2.4-.5-.5-1.2-.8-2-.8-.7 0-1.2.1-1.7.4-.5.3-1 .7-1.2 1.2-.3.6-.4 1.2-.4 2.1v6.8h-4V15.6h3.8v1.6ZM50 27.7c-.3.4-.7.7-1.2 1a6 6 0 0 1-3 .8 7 7 0 0 1-3.6-1c-1-.5-1.8-1.3-2.4-2.4-.6-1-1-2.3-1-3.7 0-1.4.4-2.7 1-3.7s1.4-1.9 2.4-2.5a7 7 0 0 1 6.5 0l1.1.8v-6.6h4v18.9H50v-1.6Zm-3.6-1.5c.7 0 1.2-.1 1.8-.4.5-.4 1-.8 1.2-1.4.3-.5.5-1.2.5-2s-.2-1.5-.5-2a3.4 3.4 0 0 0-3-1.8c-.7 0-1.2.2-1.8.5-.5.3-1 .7-1.2 1.3-.3.5-.5 1.2-.5 2s.2 1.5.5 2a3.3 3.3 0 0 0 3 1.8Zm13.6 3V10.5h4v18.9h-4Zm10.2 0V15.7h4v13.7h-4Zm2-15.5c-.8 0-1.3-.2-1.8-.7a2 2 0 0 1-.7-1.5c0-.7.2-1.2.7-1.6.5-.4 1-.7 1.8-.7.7 0 1.3.2 1.8.6.4.4.6 1 .6 1.6 0 .6-.2 1.2-.6 1.6-.5.5-1 .7-1.8.7Zm12 3.5c.4-.4.8-.8 1.4-1 .9-.6 2-.8 3.1-.8s2 .2 3 .6c.8.5 1.5 1.1 2 2 .4.9.7 2 .7 3.4v7.9h-4V22c0-1-.2-1.9-.7-2.4-.5-.5-1.2-.8-2-.8-.7 0-1.2.1-1.7.4-.5.3-1 .7-1.2 1.2-.3.6-.4 1.2-.4 2.1v6.8h-4V15.6h3.8v1.6Zm19.4 6.3c0 .4.2.7.4 1 .3.6.8 1 1.4 1.3a5.2 5.2 0 0 0 4 .1c.6-.2 1-.5 1.6-1l2 2.4c-.6.7-1.4 1.2-2.3 1.6-1 .4-2 .6-3.3.6-1.5 0-3-.3-4-1a6.8 6.8 0 0 1-3.8-6 6.8 6.8 0 0 1 3.6-6.1c1-.7 2.3-1 3.7-1 1.3 0 2.6.3 3.6.8 1.1.6 2 1.4 2.6 2.5a7.3 7.3 0 0 1 .9 4.8h-10.4Zm0-2.3h6.7c0-.4-.2-.8-.4-1.1-.3-.6-.7-1-1.2-1.3-.5-.3-1-.4-1.8-.4-.6 0-1.2.1-1.8.4a3.6 3.6 0 0 0-1.6 2.4ZM154 25c-.8 0-1.4-.2-2-.5-.5-.3-1-.7-1.3-1.3-.3-.5-.4-1.2-.4-1.9s.1-1.3.4-1.9c.3-.5.8-1 1.3-1.2.6-.4 1.2-.5 2-.5.6 0 1.1.1 1.6.3.5.3.9.6 1.2 1.1l-.8.5c-.2-.4-.5-.6-.9-.8-.3-.2-.7-.3-1.2-.3s-1 .1-1.3.4c-.5.2-.8.5-1 1a3 3 0 0 0-.4 1.4c0 .6.2 1 .4 1.5.2.4.5.7 1 1 .4.2.8.3 1.3.3s.9 0 1.2-.2l1-.8.7.5c-.3.4-.7.8-1.2 1-.5.3-1 .4-1.7.4Zm8.8 0c-.7 0-1.3-.2-1.9-.5-.5-.3-1-.7-1.3-1.3-.3-.5-.4-1.2-.4-1.9s.1-1.3.4-1.9c.4-.5.8-1 1.3-1.2.6-.4 1.2-.5 1.9-.5s1.3.1 1.9.5c.5.3 1 .7 1.3 1.2.3.6.5 1.2.5 2 0 .6-.2 1.3-.5 1.8-.3.6-.8 1-1.3 1.3-.6.3-1.2.5-1.9.5Zm0-.9c.5 0 1-.1 1.4-.3l1-1c.2-.4.3-1 .3-1.5s-.1-1-.4-1.4a2.5 2.5 0 0 0-2.3-1.4c-.5 0-1 .1-1.3.4-.4.2-.8.5-1 1a3 3 0 0 0-.4 1.4c0 .6.2 1 .4 1.5a2.5 2.5 0 0 0 2.3 1.3Zm10 .9c-.8 0-1.4-.2-2-.5-.5-.3-1-.7-1.3-1.3-.3-.5-.4-1.2-.4-1.9s.1-1.3.4-1.9c.4-.5.8-1 1.3-1.2.6-.4 1.2-.5 2-.5.6 0 1.2.1 1.8.5.5.3 1 .7 1.3 1.2.3.6.5 1.2.5 2 0 .6-.2 1.3-.5 1.8-.3.6-.8 1-1.3 1.3-.6.3-1.2.5-1.9.5Zm0-.9c.4 0 .9-.1 1.3-.3l1-1c.2-.4.3-1 .3-1.5s-.1-1-.4-1.4a2.5 2.5 0 0 0-2.3-1.4c-.5 0-1 .1-1.3.4-.4.2-.8.5-1 1a3 3 0 0 0-.3 1.4 2.5 2.5 0 0 0 2.7 2.8Zm7.9-1.2v2h-1V14.8h1v6.9l4.2-4h1.2l-3 3 3.3 4.2h-1.2l-2.8-3.6-1.7 1.6Zm8.6 2v-7.1h1v7.1h-1Zm.4-8.7c-.2 0-.3 0-.5-.2a.7.7 0 0 1-.2-.5l.2-.5.5-.2c.2 0 .4 0 .5.2.2.1.3.3.3.5l-.2.5-.6.2Zm4.8 5.4c0 .5.2.9.4 1.2.2.4.5.7 1 1 .4.2.9.3 1.4.3.5 0 .9 0 1.3-.2l1-.7.5.6a3 3 0 0 1-1.2.9 4 4 0 0 1-1.6.3 4 4 0 0 1-2-.5c-.5-.3-1-.7-1.3-1.3-.3-.5-.4-1.2-.4-1.9s.1-1.3.4-1.9a3.4 3.4 0 0 1 3-1.7c.7 0 1.3.1 1.9.4.5.3.9.8 1.2 1.3a4 4 0 0 1 .4 2.2h-6Zm0-.7h5.1c0-.4-.1-.8-.3-1a2.5 2.5 0 0 0-2.2-1.4c-.5 0-1 .1-1.4.4-.4.2-.7.5-.9 1-.1.2-.3.6-.3 1Z"/>
                  <path fill="#03e987" d="m129 26.2-16.6 16.6a2.2 2.2 0 1 1-3.2-3L126 23l-10-10a2.2 2.2 0 0 1 3.2-3l10 9.9L148.2.6a2.2 2.2 0 1 1 3.2 3.2L132 23l7.3 7.2a2.2 2.2 0 0 1-3.2 3.1l-7.2-7.2Z"/>
                </svg>
            </div>
        </div>
    </div>
    <hr>';
}

function endlinex_add_admin_menu() {
    add_menu_page(
        '',
        'Cookie',
        'manage_options',
        'endlinex-cookie',
        __NAMESPACE__ . '\endlinex_settings_page_html',
        'dashicons-shield-alt',
        20
    );

    // Vytvoření nastavení během inicializace admin menu
    add_action('admin_init', __NAMESPACE__ . '\endlinex_settings_init');
}

add_action('admin_menu', __NAMESPACE__ . '\endlinex_add_admin_menu');

function endlinex_settings_init() {

    // register Google Tag Manager Id field
    register_setting('endlinex', 'endlinex_gtm_id', array(
        'type' => 'string',
        'default' => NULL,
    ));

    add_settings_section(
        'endlinex_gtm_section',
        'Google Tag Manager',
        function() {
            echo '<p>Chcete-li zprovoznit na svém webu Google Tag Manager a propojit ho s Cookie lištou stačí níže zadat vaše GTM ID a kód který ho spravuje se automaticky doplní na web. Pokud si nevíte rady s tím kde tenhle kód najít, pomůže vám oficiální <a href="https://support.google.com/tagmanager/answer/6103696?hl=cs" target="_blank">dokumentace</a> Google.</p>';
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

    add_settings_section(
        'endlinex_client_section',
        'Klientské nastavení',
        function() {
            echo '<p>Tohle nastavení slouží pro definici stránky <a href="/cookie-policy" target="_blank">Zásady používání souborů cookie</a>, která je nezbytnou součástí Cookie consent lišty. Pro její správné chování je důležité pečlivě vyplnit níže uvedené pole.</p>';
        },
        'endlinex'
    );

    // register fields for each value in $cookiePageClient
    $cookiePageClient = array(
        'name' => 'Jméno / Firma',
        'ico' => 'IČO (jedná-li se o firmu)',
        'address' => 'Adresa',
        'website' => 'Webové stránky',
        'email' => 'E-mail',
        'dateStart' => 'Datum zahájení',
    );

    foreach($cookiePageClient as $field => $label) {
        // get the default values for specific fields
        $default = NULL;
        if ($field === 'email') {
            $default = get_option('admin_email');
        } elseif ($field === 'dateStart') {
            $default = current_time('d.m.Y');
        } elseif ($field === 'website') {
            $default = $_SERVER['SERVER_NAME'];
        }

        register_setting('endlinex', 'endlinex_' . $field, array('type' => 'string','default' => $default));

        // add actual field to a specific section
        add_settings_field(
            'endlinex_' . $field,
            $label,
            __NAMESPACE__ . '\endlinex_custom_field_html',
            'endlinex',
            'endlinex_client_section',
            array('label_for' => 'endlinex_' . $field) // Pass the field ID as an arg
        );
    }
}

function endlinex_gtm_field_html() {
    $gtm_id = get_option('endlinex_gtm_id');
    echo '<input type="text" placeholder="GTM-XXXX" name="endlinex_gtm_id" value="' . $gtm_id . '" />';
}

function endlinex_custom_field_html($args) {
    $option = get_option($args['label_for']);
    echo '<input type="text" id="' . $args['label_for'] . '" name="' . $args['label_for'] . '" value="' . $option . '" />';
}

function endlinex_settings_page_html() {
    endlineX_custom_admin_header();

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