<?php

$dialogTitle = "Souhlas s využitím cookies";
$dialogDescription = "Využíváme cookies k personalizaci obsahu, analýze návštěvnosti a zároveň ke zlepšení zážitku z našich webových stránek. Prosíme, vyjádřete svůj souhlas s používáním cookies.";
$dialogSettingsTitle = "Nastavení cookies";
$dialogSettingsDescription = "Soubory cookie používáme k analýze údajů o našich návštěvnících, ke zlepšení našich webových stránek, zobrazení personalizovaného obsahu a k tomu, abychom vám poskytli skvělý zážitek z webu.";
$dialogSettingsFunctionTitle = "Funkční cookies";
$dialogSettingsFunctionDescription = "Tyto soubory cookie jsou nezbytné pro fungování webových stránek, není tedy možné je zakázat. Obvykle se nastavují v reakci na akci, kterou na webu sami provedete, jako je nastavení zabezpečení, přihlášení a vyplňování formulářů. Svůj prohlížeč můžete nastavit tak, aby blokoval soubory cookie nebo o nich zasílal upozornění. Mějte na paměti, že některé stránky nebudou bez těchto souborů fungovat. Tyto soubory cookie neukládají žádné informace, které lze přiřadit konkrétní osobě. Tyto soubory cookie můžeme nastavit my nebo poskytovatelé třetích stran, jejichž služby na webu využíváme. Tyto soubory cookie neukládají žádné informace, které lze přiřadit konkrétní osobě.";

$dialogSettingsCategories = array(
    array(
        'id' => 'functional_cookies',
        'necessary' => true,
        'title' => 'Funkční cookies',
        'description' => 'Tyto soubory cookie jsou nezbytné pro fungování webových stránek, není tedy možné je zakázat. Obvykle se nastavují v reakci na akci, kterou na webu sami provedete, jako je nastavení zabezpečení, přihlášení a vyplňování formulářů. Svůj prohlížeč můžete nastavit tak, aby blokoval soubory cookie nebo o nich zasílal upozornění. Mějte na paměti, že některé stránky nebudou bez těchto souborů fungovat. Tyto soubory cookie neukládají žádné informace, které lze přiřadit konkrétní osobě. Tyto soubory cookie můžeme nastavit my nebo poskytovatelé třetích stran, jejichž služby na webu využíváme. Tyto soubory cookie neukládají žádné informace, které lze přiřadit konkrétní osobě.'
    ),
    array(
        'id' => 'analytic_cookies',
        'necessary' => false,
        'title' => 'Analytické cookies',
        'description' => 'Tyto soubory cookie se používají ke zlepšení fungování webových stránek. Umožňují nám rozpoznat a sledovat počet návštěvníků a sledovat, jak návštěvníci web používají. Pomáhají nám zlepšovat způsob, jakým webové stránky fungují, například tím, že uživatelům umožňují snadno najít to, co hledají. Tyto soubory cookie neshromažďují informace, které by vás mohly identifikovat. Pomocí těchto nástrojů analyzujeme a pravidelně zlepšujeme funkčnost našich webových stránek. Získané statistiky můžeme využít ke zlepšení uživatelského komfortu a k tomu, aby byla návštěva webu pro vás jako uživatele zajímavější. Tyto analytické soubory cookie budou použity pouze s vaším souhlasem.'
    ),
    array(
        'id' => 'marketing_cookies',
        'necessary' => false,
        'title' => 'Marketingové cookies',
        'description' => 'Používají se ke sledování preferencí webu uživatele za účelem cílení reklamy, tj. zobrazování marketingových a reklamních sdělení (i na stránkách třetích stran), které mohou návštěvníka webu zajímat, v souladu s těmito preferencemi. Marketingové cookies využívají nástroje externích společností. Tyto marketingové soubory cookie budou použity pouze s vaším souhlasem.'
    )
);

echo '
    <div id="cookieModal" class="endlinex-backdrop hidden"></div>

    <div id="cookieDialog" class="endlinex-cookie hidden">
        <div class="endlinex-cookie-dialog">
            <div class="title">'.$dialogTitle.'</div>
            <p>'.$dialogDescription.'</p>
            <div class="footer">
                <button id="acceptBtn">Přijmout</button>
                <button id="denyBtn">Odmítnout</button>
                <button id="settingsBtn">Nastavení</button>
            </div>
            <div class="credits">
                Powered by
                
                <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" clip-rule="evenodd" viewBox="0 0 201 44">
                  <path fill="#242e33" d="M4 23.5c0 .4.2.7.4 1 .3.6.8 1 1.4 1.3a5.2 5.2 0 0 0 4 .1c.6-.2 1-.5 1.5-1l2.2 2.4c-.7.7-1.5 1.2-2.4 1.6-1 .4-2 .6-3.3.6-1.5 0-3-.3-4.1-1a6.8 6.8 0 0 1-3.7-6 6.8 6.8 0 0 1 3.6-6.1c1-.7 2.3-1 3.7-1 1.3 0 2.6.3 3.6.8 1.1.6 2 1.4 2.6 2.5a7.3 7.3 0 0 1 .8 4.8H4Zm0-2.3h6.7c0-.4-.2-.8-.4-1.1-.3-.6-.7-1-1.2-1.3-.5-.3-1-.4-1.8-.4-.7 0-1.2.1-1.8.4A3.6 3.6 0 0 0 4 21.2Zm19.4-4a5 5 0 0 1 1.4-1c1-.6 2-.8 3.1-.8s2 .2 3 .6c.8.5 1.5 1.1 2 2 .5.9.7 2 .7 3.4v7.9h-4V22c0-1-.2-1.9-.7-2.4-.5-.5-1.2-.8-2-.8-.7 0-1.2.1-1.7.4-.5.3-1 .7-1.2 1.2-.3.6-.4 1.2-.4 2.1v6.8h-4V15.6h3.8v1.6ZM50 27.7c-.3.4-.7.7-1.2 1a6 6 0 0 1-3 .8 7 7 0 0 1-3.6-1c-1-.5-1.8-1.3-2.4-2.4-.6-1-1-2.3-1-3.7 0-1.4.4-2.7 1-3.7s1.4-1.9 2.4-2.5a7 7 0 0 1 6.5 0l1.1.8v-6.6h4v18.9H50v-1.6Zm-3.6-1.5c.7 0 1.2-.1 1.8-.4.5-.4 1-.8 1.2-1.4.3-.5.5-1.2.5-2s-.2-1.5-.5-2a3.4 3.4 0 0 0-3-1.8c-.7 0-1.2.2-1.8.5-.5.3-1 .7-1.2 1.3-.3.5-.5 1.2-.5 2s.2 1.5.5 2a3.3 3.3 0 0 0 3 1.8Zm13.6 3V10.5h4v18.9h-4Zm10.2 0V15.7h4v13.7h-4Zm2-15.5c-.8 0-1.3-.2-1.8-.7a2 2 0 0 1-.7-1.5c0-.7.2-1.2.7-1.6.5-.4 1-.7 1.8-.7.7 0 1.3.2 1.8.6.4.4.6 1 .6 1.6 0 .6-.2 1.2-.6 1.6-.5.5-1 .7-1.8.7Zm12 3.5c.4-.4.8-.8 1.4-1 .9-.6 2-.8 3.1-.8s2 .2 3 .6c.8.5 1.5 1.1 2 2 .4.9.7 2 .7 3.4v7.9h-4V22c0-1-.2-1.9-.7-2.4-.5-.5-1.2-.8-2-.8-.7 0-1.2.1-1.7.4-.5.3-1 .7-1.2 1.2-.3.6-.4 1.2-.4 2.1v6.8h-4V15.6h3.8v1.6Zm19.4 6.3c0 .4.2.7.4 1 .3.6.8 1 1.4 1.3a5.2 5.2 0 0 0 4 .1c.6-.2 1-.5 1.6-1l2 2.4c-.6.7-1.4 1.2-2.3 1.6-1 .4-2 .6-3.3.6-1.5 0-3-.3-4-1a6.8 6.8 0 0 1-3.8-6 6.8 6.8 0 0 1 3.6-6.1c1-.7 2.3-1 3.7-1 1.3 0 2.6.3 3.6.8 1.1.6 2 1.4 2.6 2.5a7.3 7.3 0 0 1 .9 4.8h-10.4Zm0-2.3h6.7c0-.4-.2-.8-.4-1.1-.3-.6-.7-1-1.2-1.3-.5-.3-1-.4-1.8-.4-.6 0-1.2.1-1.8.4a3.6 3.6 0 0 0-1.6 2.4ZM154 25c-.8 0-1.4-.2-2-.5-.5-.3-1-.7-1.3-1.3-.3-.5-.4-1.2-.4-1.9s.1-1.3.4-1.9c.3-.5.8-1 1.3-1.2.6-.4 1.2-.5 2-.5.6 0 1.1.1 1.6.3.5.3.9.6 1.2 1.1l-.8.5c-.2-.4-.5-.6-.9-.8-.3-.2-.7-.3-1.2-.3s-1 .1-1.3.4c-.5.2-.8.5-1 1a3 3 0 0 0-.4 1.4c0 .6.2 1 .4 1.5.2.4.5.7 1 1 .4.2.8.3 1.3.3s.9 0 1.2-.2l1-.8.7.5c-.3.4-.7.8-1.2 1-.5.3-1 .4-1.7.4Zm8.8 0c-.7 0-1.3-.2-1.9-.5-.5-.3-1-.7-1.3-1.3-.3-.5-.4-1.2-.4-1.9s.1-1.3.4-1.9c.4-.5.8-1 1.3-1.2.6-.4 1.2-.5 1.9-.5s1.3.1 1.9.5c.5.3 1 .7 1.3 1.2.3.6.5 1.2.5 2 0 .6-.2 1.3-.5 1.8-.3.6-.8 1-1.3 1.3-.6.3-1.2.5-1.9.5Zm0-.9c.5 0 1-.1 1.4-.3l1-1c.2-.4.3-1 .3-1.5s-.1-1-.4-1.4a2.5 2.5 0 0 0-2.3-1.4c-.5 0-1 .1-1.3.4-.4.2-.8.5-1 1a3 3 0 0 0-.4 1.4c0 .6.2 1 .4 1.5a2.5 2.5 0 0 0 2.3 1.3Zm10 .9c-.8 0-1.4-.2-2-.5-.5-.3-1-.7-1.3-1.3-.3-.5-.4-1.2-.4-1.9s.1-1.3.4-1.9c.4-.5.8-1 1.3-1.2.6-.4 1.2-.5 2-.5.6 0 1.2.1 1.8.5.5.3 1 .7 1.3 1.2.3.6.5 1.2.5 2 0 .6-.2 1.3-.5 1.8-.3.6-.8 1-1.3 1.3-.6.3-1.2.5-1.9.5Zm0-.9c.4 0 .9-.1 1.3-.3l1-1c.2-.4.3-1 .3-1.5s-.1-1-.4-1.4a2.5 2.5 0 0 0-2.3-1.4c-.5 0-1 .1-1.3.4-.4.2-.8.5-1 1a3 3 0 0 0-.3 1.4 2.5 2.5 0 0 0 2.7 2.8Zm7.9-1.2v2h-1V14.8h1v6.9l4.2-4h1.2l-3 3 3.3 4.2h-1.2l-2.8-3.6-1.7 1.6Zm8.6 2v-7.1h1v7.1h-1Zm.4-8.7c-.2 0-.3 0-.5-.2a.7.7 0 0 1-.2-.5l.2-.5.5-.2c.2 0 .4 0 .5.2.2.1.3.3.3.5l-.2.5-.6.2Zm4.8 5.4c0 .5.2.9.4 1.2.2.4.5.7 1 1 .4.2.9.3 1.4.3.5 0 .9 0 1.3-.2l1-.7.5.6a3 3 0 0 1-1.2.9 4 4 0 0 1-1.6.3 4 4 0 0 1-2-.5c-.5-.3-1-.7-1.3-1.3-.3-.5-.4-1.2-.4-1.9s.1-1.3.4-1.9a3.4 3.4 0 0 1 3-1.7c.7 0 1.3.1 1.9.4.5.3.9.8 1.2 1.3a4 4 0 0 1 .4 2.2h-6Zm0-.7h5.1c0-.4-.1-.8-.3-1a2.5 2.5 0 0 0-2.2-1.4c-.5 0-1 .1-1.4.4-.4.2-.7.5-.9 1-.1.2-.3.6-.3 1Z"/>
                  <path fill="#03e987" d="m129 26.2-16.6 16.6a2.2 2.2 0 1 1-3.2-3L126 23l-10-10a2.2 2.2 0 0 1 3.2-3l10 9.9L148.2.6a2.2 2.2 0 1 1 3.2 3.2L132 23l7.3 7.2a2.2 2.2 0 0 1-3.2 3.1l-7.2-7.2Z"/>
                </svg>
            </div>
        </div>
        
        <div id="settingsDialog" class="endlinex-cookie-dialog pb-8 mb-8 border-b-[1px] border-gray-200 hidden">
            <div class="title">'.$dialogSettingsTitle.'</div>    
            <p>'.$dialogSettingsDescription.'</p>
            
            <a href="/cookie" class="underline">' . __("Více o cookie", 'endlineX') . '</a>
            
            <div class="space-y-0 w-full">';

            foreach ($dialogSettingsCategories as $category) {
                $id = $category['id'];
                $title = $category['title'];
                $description = $category['description'];
                $necessary = $category['necessary'];

                echo '
                    <div x-data="{ open: false }" class="flex flex-col w-full">
                        <button @click="open = ! open" class="flex flex-row justify-between items-center font-bold">
                            <span>
                                <iconify-icon icon="mdi:chevron-down" class=""></iconify-icon>
                                ' . $title .'
                            </span>
                            
                            <label for="' . $id .'" class="flex items-center cursor-pointer">
                                <div class="relative cursor-pointer">
                                  <input type="checkbox" id="' . $id .'" class="sr-only" '. ($necessary ? "checked" : "") .'>
                                  <div class="block bg-gray-200 w-10 h-6 rounded-full"></div>
                                  <div class="dot absolute left-1 top-1 bg-white w-4 h-4 rounded-full transition"></div>
                                </div>
                            </label>
                        </button>
                     
                        <div x-show="open" @click.outside="open = false" class="py-3 text-left text-gray-400">
                        ' . $description .'
                        </div>
                    </div>';
            }
            echo '
            </div>
        </div>
    </div>';