<?php

// ----------[ imports ]---------- 
include_once('create_full_page.php');

// ----------[ génération de la page web ]---------- 
$page_title = '404';

$page_script = '';

$header_content = '';

$main_content = '
    <div>
        <img id="minitel" src="img/3615jam-v2_2-minitel_animation-404-672.gif" />
        <a id="homepage_return" href="https://3615jam.fr/"><h1 class="button">RETOUR</h1></a>
    </div>
';

$params = [$page_title, $page_script, $header_content, $main_content];

echo (createFullPage(...$params));
