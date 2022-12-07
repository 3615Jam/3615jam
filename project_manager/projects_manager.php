<?php

// ----------[ imports ]---------- 
include_once('create_full_page.php');

// ----------[ récupération de la liste des projets (JSON) ]---------- 
$json_projects_list = "projects.json";
$projects_list = json_decode(file_get_contents($json_projects_list), true);

// ----------[ génération de la page web ]---------- 
$page_title = 'Projects Manager';

$page_script = '';

$header_content = '';

$main_content = '
    <div style="background-color: #FFF">
        <form action="project_register.php" method="post">
            <div>
                <label for="project_title">Titre du projet :</label>
                <input type="text" id="project_title" name="project_title" />
            </div>
            <div>
                <label for="project_summary">Résumé :</label>
                <input type="text" id="project_summary" name="project_summary" />
            </div>
            <div>
                Techno(s) utilisée(s) :
                <div>
                    <input type="checkbox" id="techno_html" name="techno_html" value="techno_html" />
                    <label for="techno_html">HTML</label>
                </div>
                <div>
                    <input type="checkbox" id="techno_css" name="techno_css" value="techno_css" />
                    <label for="techno_css">CSS</label>
                </div>
                <div>
                    <input type="checkbox" id="techno_js" name="techno_js" value="techno_js" />
                    <label for="techno_js">JavaScript</label>
                </div>
                <div>
                    <input type="checkbox" id="techno_sql" name="techno_sql" value="techno_sql" />
                    <label for="techno_sql">MySQL</label>
                </div>
                <div>
                    <input type="checkbox" id="techno_php" name="techno_php" value="techno_php" />
                    <label for="techno_php">PHP</label>
                </div>
            </div>
            <input type="submit" value="Enregistrer" />
        </form>
    </div>';

$params = [$page_title, $page_script, $header_content, $main_content];

echo (createFullPage(...$params));