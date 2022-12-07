<?php

// ----------[ imports ]---------- 
include_once('create_full_page.php');

// ----------[ récupération de la liste des projets (JSON) ]---------- 
$json_projects_list = "projects.json";
$projects_list = json_decode(file_get_contents($json_projects_list), true);

// ----------[ génération de la page web ]---------- 
$page_title = 'Projects';

$page_script = '';

$header_content = '';

/**
 * Pour le '$main_content' de cette page, on va créer une div centrale qui va lister (<ul>) tous les projets. 
 * On aura besoin de 2 boucles : 
 *      - la 1ère pour récupérer tous les projets 
 *      - la 2nde pour lister les technos utilisées dans chaque projet 
 */
$main_content = '
    <div style="background-color: #FFF; text-align: center">
        <button><a href="project_manager/projects_manager.html">Gérer les projets</a></button>
';
foreach ($projects_list["projects"] as $project_key => $project_val) {
    $main_content .= '
        <ul>
            <li>' . $project_val["title"] . '</li>
            <li>' . $project_val["summary"] . '</li>
                <ul>';
    foreach ($projects_list["projects"][$project_key]["techno"] as $techno_key => $techno_val) {
        $main_content .= '<li>' . $techno_val . '</li>';
    }
    $main_content .= '</ul></ul>';
    // $main_content .= '<li>' . $project_val["link"] . '</li>
    //     </ul>';
}
$main_content .= '</div>';

$params = [$page_title, $page_script, $header_content, $main_content];

echo (createFullPage(...$params));