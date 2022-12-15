<?php

// ----------[ imports ]---------- 
include_once('create_full_page.php');

// ----------[ génération de la page web ]---------- 
$page_title = 'Apple (PHP)';

$page_script = '';

$header_content = '';

$main_content = '';

$params = [$page_title, $page_script, $header_content, $main_content];

echo (createFullPage(...$params));