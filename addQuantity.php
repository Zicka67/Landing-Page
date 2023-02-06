<?php
session_start();

require_once('db-functions.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $db = new PDO(
        'mysql:host=localhost;dbname=landingpage;charset=utf8',
        'root',
        '',
        [
            \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
            \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
            \PDO::MYSQL_ATTR_INIT_COMMAND => 'set NAMES utf8'
        ]
    );

    $db = dbFunction();

    $id = $_POST['id'];
    $result = upQtt($id);

    // Mettre à jour la quantité de l'enregistrement
    $newQtt = 1;
    if ($result && array_key_exists('qtt', $result)) {
        $newQtt = $result['qtt'] + 1;
    }

    // Requête SQL pour mettre à jour la quantité
    $sqlRequest = 'UPDATE pricing SET qtt = :qtt WHERE id = :id';

    // Prep de la requête
    $stmt = $db->prepare($sqlRequest);

    // Exécution de la requête
    $stmt->execute([':qtt' => $newQtt, ':id' => $id]);
}

?>


