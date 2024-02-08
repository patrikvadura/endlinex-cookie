<?php

namespace endlineX;

function endlinex_add_gtm_head() {
    $gtm_id = get_option('endlinex_gtm_id');
    echo <<<EOT
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer', '$gtm_id');</script>
    <!-- End Google Tag Manager -->
EOT;
}
add_action('wp_head', __NAMESPACE__ . '\endlinex_add_gtm_head');

function endlinex_add_gtm_body() {
    $gtm_id = get_option('endlinex_gtm_id');
    echo <<<EOT
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=$gtm_id"
                      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
EOT;
}
add_action('wp_body_open', __NAMESPACE__ . '\endlinex_add_gtm_body');
