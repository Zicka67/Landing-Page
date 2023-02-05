<?php

// pour lier le fichier db-functions.php
include 'db-functions.php';

// **** Pour récuperer et envoyer l'email dans la DB ****

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Récupération de l'email depuis le formulaire
    $email = $_POST['email'];

    // Connexion à la base de données en utilisant la fonction dbFunction
    $db = dbFunction();

    // Préparation et exécution de la requête d'insertion
    $stmt = $db->prepare("INSERT INTO email (email) VALUES (:email)");
    $stmt->bindParam(':email', $email); //Permet de lier un paramètre à un nom de variable spécifique. 
    //En gros la valeur associée à la variable $email sera utilisée pour remplacer le paramètre nommé :email dans la requête SQL. 
    $stmt->execute();

    // Fermeture de la connexion
    $db = null;
}
// Redirection vers la page admin.php
header("Location: index.php");
exit();
?>

?>

