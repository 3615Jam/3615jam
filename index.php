<?php

// ----------[ imports ]---------- 
include_once('create_full_page.php');

// ----------[ génération de la page web ]---------- 
$page_title = 'Bienvenue';

$page_script = 'background.js';

$header_content = '';

$main_content = '
    <a href="web.php" id="zone_web" class="zone zone_white"><h1>WEB</h1></a>
        <div>
            <img id="minitel" src="img/3615jam-v2_2-minitel_animation-logo-672.gif" />
        </div>
    <a href="apple.php" id="zone_apple" class="zone zone_black"><h1>APPLE</h1></a>
';

$params = [$page_title, $page_script, $header_content, $main_content];

echo (createFullPage(...$params));
