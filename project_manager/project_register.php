<!-- script pour envoyer les données d'enregistrement d'un nouveau projet dans 'projects.json' -->
<?php


// -----------------------------------------------------------


// récup json 
$projects_list = json_decode(file_get_contents("projects.json"), true);

var_dump($projects_list);



// incrémenter le id compteur de projet :
// -> récup l'id du dernier projet -> +1 
// echo (array_key_last($projects_list["projects"]) + 1);
$new_id = array_key_last($projects_list["projects"]) + 1;

// remplir les infos : 
// -> récupérer les valeurs du formulaires et les stocker dans un tableau '$params'
$params = [];
foreach ($_POST as $key => $val) {
    if (isset($_POST[$key]) && !empty($_POST[$key])) {
        $params[] = htmlspecialchars($_POST[$key]);
    } else {
        $params[] = null;
    }
}

// var_dump($params);









// -> créer une nouvelle entrée 'projet' avec le titre et le résumé récupérés 
$projects_list["projects"][] = array("id" => $new_id, "title" => $params[0], "summary" => $params[1], "techno" => []);


// -> pusher les technos dans le sous-tableau 'techno' 
if (count($params) > 2) {


    for ($i = 2; $i < count($params); $i++) {
        array_push($projects_list["projects"][$new_id]["techno"], $params[$i]);
    }
    // var_dump($updated_array);
    // array_push($updated_array[0], $techno_array);
}




echo "-----------------------------------------------";


var_dump($projects_list);














// -> encoder le tableau 
// $updated_json = json_encode($projects_list);

// -> renvoyer le tableau encodé 
file_put_contents("projects.json", json_encode($projects_list, JSON_UNESCAPED_UNICODE));

// reload la page projects  






// -----------------------------------------------------------

// $data[] = $_POST['project_summary'];

// $inp = file_get_contents('results.json');
// $tempArray = json_decode($inp);
// array_push($tempArray, $data);
// $jsonData = json_encode($tempArray);
// file_put_contents('results.json', $jsonData);