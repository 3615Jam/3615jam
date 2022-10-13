<?php

// ----------[ imports ]---------- 
include_once('create_full_page.php');

// ----------[ génération de la page web ]---------- 
$page_title = 'Bientôt...';

$page_script = '';

$header_content = '';

$main_content = '
    <div>
        <h1 id="soon">Bientôt<br />...</h1>
        <img id="minitel" src="img/3615jam-v2_2-minitel_animation-logo-672.gif" />
    </div>
';

$params = [$page_title, $page_script, $header_content, $main_content];

echo (createFullPage(...$params));
