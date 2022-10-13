<?php

function createFullPage($page_title, $page_script, $header_content, $main_content)
{
    $page_start = '
        <!DOCTYPE html>
        <html lang="fr">
            <head>
                <meta charset="UTF-8" />
                <meta http-equiv="X-UA-Compatible" content="IE=edge" />
                <meta name="viewport" content="width=device-width, initial-scale=1.0" />
                <title>3615 JAM | ' . $page_title . '</title>
                <link rel="stylesheet" type="text/css" href="style.css" />
                <link rel="icon" type="image/png" href="img/3615jam-v2_2-logo-big-bg_black-txt_white-128.png" />
                <script src="' . $page_script . '" defer></script>
            </head>
            <body>
    ';

    $header = '
        <header>' . $header_content . '</header>
    ';

    $main = '
        <main>' . $main_content . '</main>
    ';

    $footer = '
        <footer class="zone_black">
            <p>
                <small><span>©</span> 2022 - 3615 JAM</small>
            </p>
        </footer>
    ';

    $page_end = '
        <noscript>
            <div id="no_js">
                <h1>⚠️</h1>
                <h1>Ce site web nécessite JavaScript</h1>
                <p>
                    Merci de bien vouloir l\'activer<br />
                    dans les options de votre navigateur<br />
                    pour profiter pleinement de l\'expérience.
                </p>
            </div>
        </noscript>
        </body>
        </html>
    ';

    $full_page = $page_start . $header . $main . $footer . $page_end;
    return $full_page;
}
