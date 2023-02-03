<?php
session_start();

// Connection à la DB
require_once('db-functions.php');

// Récupération des données envoyées à partir du formulaire
$price = $_POST['price'];
$bandwidth = $_POST['bandwidth'];
$onlinespace = $_POST['onlinespace'];
$support = $_POST['support'];
$domain = $_POST['domain'];
$fee = $_POST['fees'];
$sale = $_POST['sale']; 

if (isset($_POST['id'])) {
    $id = $_POST['id'];
} else {
    echo "Error: ID is not defined.";
    // Redirect to another page.
    exit();
}
// Mettre à jour les enregistrements dans la base de données
modifyProduct($price, $bandwidth, $onlinespace, $support, $domain, $fee, $sale, $id);

// Redirection vers la page admin.php
header("Location: admin.php");
exit();
?>



