<?php
session_start();

require_once('db-functions.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $db = new PDO(
        'mysql:host=localhost;dbname=landingpage;charset=utf8',
        'root',
        '',
        [
            \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION, //Cette option précise le type d'erreur que PDO renverra en cas de requête invalide.
            \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC, //Cette définit le mode de récupération des données de la base par défaut. 
            // Ici, PDO renverra les données sous forme de tableau associatif (FETCH_ASSOC
            \PDO::MYSQL_ATTR_INIT_COMMAND => 'set NAMES utf8' //Cette définit le mode de récupération des données de la base par défaut. Ici, PDO 
            // renverra les données sous forme de tableau associatif (FETCH_ASSOC).
        ]

    );

    $db = dbFunction();

    $id = $_POST['id'];
    $result = upQtt($id);

    // Mettre à jour la quantité de l'enregistrement
    $newQtt = $result['qtt'] + 1;

    // Requête SQL pour mettre à jour la quantité
    $sqlRequest = 'UPDATE pricing SET qtt = :qtt WHERE id = :id';

    // Prep de la requête
    $stmt = $db->prepare($sqlRequest);

    // Exécution de la requête
    $stmt->execute([':qtt' => $newQtt, ':id' => $id]);
}

?>


