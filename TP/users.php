<?php 

header("content-type: application/json");

// Connection BDD
// -- 
include_once "dbconnect.php";

// Traitement du formulaire
// -- 

if ($_SERVER['REQUEST_METHOD'] === "POST")
{
    // Definition d'erreurs
    $hasError = false;

    // Récupération des données du form
    $firstname = $_POST['firstname'] ?? null;
    $lastname = $_POST['lastname'] ?? null;

    // Corntrole de form
    // ... 

    // Enregistrement des données 
    if (!$hasError)
    {
        // Enregistrement en BDD
        $sql = "INSERT INTO `users` (`firstname`,`lastname`) VALUES (:firstname,:lastname)";
        $query = $db->prepare($sql);
        $query->bindValue(":firstname", $firstname, PDO::PARAM_STR);
        $query->bindValue(":lastname", $lastname, PDO::PARAM_STR);

        $query->execute();

        echo json_encode([
            "status" => "success"
        ]);
    }
    else 
    {
        echo json_encode([
            "status" => "error"
        ]);
    }

    exit;
}

// Affichage des "users"
// --

// Récupération des données dans la BDD
$sql = "SELECT * FROM `users`";
$query = $db->query($sql);
$users = $query->fetchAll(PDO::FETCH_OBJ);

// Affichage au format json
echo json_encode($users);
