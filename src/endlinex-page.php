<?php

$cookiePageClient = array(
    'name' => 'Patrik Vaďura',
    'ico' => '08552703',
    'address' => 'Nedakonice 221, 687 38 Nedakonice',
    'website' => '',
    'email' => 'info@patrikvadura.cz',
    'dateStart' => '1. 1. 2023',
);

// Block - Description
echo '<!-- wp:paragraph -->';
echo '<p>Naše společnost ' . $cookiePageClient['name'] . ', se sídlem na adrese ' . $cookiePageClient['address'] . ', IČO ' . $cookiePageClient['ico'] .' (dále jen "my"), využívá soubory cookie pro zajištění hladkého fungování a zlepšení našich internetových stránek. Cílem tohoto dokumentu, nazvaného "Zásady používání souborů cookie" (dále jen "zásady"), je poskytnout vám informace o tom, jak s těmito soubory nakládáme, včetně zpracování osobních údajů, a seznámit vás s vašimi právy podle zákona o elektronických komunikacích č. 127/2005 Sb. a nařízení GDPR č. 2016/679. Jako uživatel našeho webu jste povinni se seznámit s těmito zásadami. V případě nejasností nebo dotazů nás kontaktujte na e-mailu: ' . $cookiePageClient['email'] . '</p>';
echo '<!-- /wp:paragraph -->';

// Block - About Cookie
echo '<!-- wp:heading -->';
echo '<h2>Co rozumíme pod pojmem soubory cookie?</h2>';
echo '<!-- /wp:heading -->';
echo '<!-- wp:paragraph -->';
echo '<p>Soubory cookie jsou malé datové soubory, které nám umožňují sbírat informace o našich návštěvnících pro zlepšení našich služeb, personalizaci obsahu a zajistění uživatelsky přívětivého prostředí na našem webu.</p>';
echo '<!-- /wp:paragraph -->';

// Block - Functional Cookie
echo '<!-- wp:heading -->';
echo '<h2>Funkční cookie</h2>';
echo '<!-- /wp:heading -->';
echo '<!-- wp:paragraph -->';
echo '<p>Tyto soubory jsou klíčové pro základní funkčnost webu a nelze je vypnout. Aktivují se v reakci na vaše akce, jako je nastavení soukromí, přihlášení či vyplňování formulářů. Pokud tyto soubory zablokujete, může to ovlivnit fungování stránky. Tyto soubory nesbírají informace, které by vás osobně identifikovaly.</p>';
echo '<!-- /wp:paragraph -->';

// Block - Analytic Cookie
echo '<!-- wp:heading -->';
echo '<h2>Analytické cookie</h2>';
echo '<!-- /wp:heading -->';
echo '<!-- wp:paragraph -->';
echo '<p>Pomáhají nám zlepšovat naše webové stránky tím, že shromažďují informace o tom, jak návštěvníci stránku používají. Díky nim můžeme analyzovat návštěvnost a vylepšovat naše služby, aby byly pro uživatele co nejpřívětivější. Tyto soubory neuchovávají žádné osobní údaje.</p>';
echo '<!-- /wp:paragraph -->';

// Block - Marketing Cookie
echo '<!-- wp:heading -->';
echo '<h2>Marketingové cookie</h2>';
echo '<!-- /wp:heading -->';
echo '<!-- wp:paragraph -->';
echo '<p>Tyto soubory slouží k personalizaci reklamních sdělení tak, aby byly pro vás co nejrelevantnější. Zaznamenávají vaše preference a návštěvy na webu a informace z nich mohou být sdíleny s externími reklamními partnery. Tyto soubory používáme pouze s vaším souhlasem.</p>';
echo '<!-- /wp:paragraph -->';

// Block - Disclaimer
echo '<!-- wp:heading -->';
echo '<h2>Jak můžete svá práva uplatnit</h2>';
echo '<!-- /wp:heading -->';
echo '<!-- wp:paragraph -->';
echo '<p>Máte možnost kdykoliv změnit své preference týkající se souborů cookie a již uložené soubory cookie můžete odstranit. Více informací najdete v nápovědě vašeho prohlížeče. Souhlas s používáním souborů cookie je možné kdykoliv odvolat.</p>';
echo '<!-- /wp:paragraph -->';

// Block - Rules
echo '<!-- wp:heading -->';
echo '<h2>Aktualizace těchto zásad</h2>';
echo '<!-- /wp:heading -->';
echo '<!-- wp:paragraph -->';
echo '<p>Tyto zásady nabývají účinnosti od ' . $cookiePageClient['dateStart'] .'. V případě potřeby si vyhrazujeme právo na jejich aktualizaci. Doporučujeme vám pravidelně kontrolovat nejnovější verzi těchto zásad na našem webu. Jakékoli změny vstupují v platnost okamžitě po zveřejnění.</p>';
echo '<!-- /wp:paragraph -->';