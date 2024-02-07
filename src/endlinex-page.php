<?php

$cookiePageClient = array(
    'name' => 'Patrik Vaďura',
    'ico' => '08552703',
    'address' => 'Nedakonice 221, 687 38 Nedakonice',
    'website' => '',
    'email' => 'info@patrikvadura.cz',
    'dateStart' => '',
);

$cookiePageContent = array(
    'title' => 'Zásady používání souborů cookie na našem webu',
    'description' => 'Naše společnost ' . $cookiePageClient['name'] .', se sídlem na adrese ' . $cookiePageClient['address'] .', IČO ' . $cookiePageClient['ico'] .' (dále jen "my"), využívá soubory cookie pro zajištění hladkého fungování a zlepšení našich internetových stránek. Cílem tohoto dokumentu, nazvaného "Zásady používání souborů cookie" (dále jen "zásady"), je poskytnout vám informace o tom, jak s těmito soubory nakládáme, včetně zpracování osobních údajů, a seznámit vás s vašimi právy podle zákona o elektronických komunikacích č. 127/2005 Sb. a nařízení GDPR č. 2016/679. Jako uživatel našeho webu jste povinni se seznámit s těmito zásadami. V případě nejasností nebo dotazů nás kontaktujte na e-mailu: ' . $cookiePageClient['email'],
    'aboutCookiesTitle' => 'Co rozumíme pod pojmem soubory cookie?',
    'aboutCookiesDescription' => 'Soubory cookie jsou malé datové soubory, které nám umožňují sbírat informace o našich návštěvnících pro zlepšení našich služeb, personalizaci obsahu a zajistění uživatelsky přívětivého prostředí na našem webu.',
    'functionalCookiesTitle' => '',
    'functionalCookiesDescription' => '',
    'analyticsCookiesTitle' => '',
    'analyticsCookiesDescription' => '',
    'marketingCookiesTitle' => '',
    'marketingCookiesDescription' => '',
    'disclaimerTitle' => '',
    'disclaimerDescription' => '',
    'rulesTitle' => '',
    'rulesDescription' => ''
);

$output = '<div class="endlinex-cookie-page">';
$output .= '<div class="title">' . __($cookiePageContent['title'], 'endlineX') . '</div>';
$output .= '<div class="description">' . __($cookiePageContent['description'], 'endlineX') . '</div>';
$output .= '<div class="subtitle">' . __($cookiePageContent['aboutCookiesTitle'], 'endlineX') . '</div>';
$output .= '<div class="description">' . __($cookiePageContent['aboutCookiesDescription'], 'endlineX') . '</div>';
$output .= '</div>';

// Return the HTML output
echo $output;