<?php
// Connection à la DB
require_once('db-functions.php');

// Récupération des données envoyées à partir du formulaire
$prices = $_POST['price'];
$bandwidths = $_POST['bandwidth'];
$onlinespaces = $_POST['onlinespace'];
$supports = $_POST['support'];
$domains = $_POST['domain'];
$fees = $_POST['fees'];
$sales = $_POST['sale'];        

// Boucle pour mettre à jour les enregistrements dans la base de données
foreach ($prices as $id => $price) {
    $bandwidth = $bandwidths[$id];
    $onlinespace = $onlinespaces[$id];
    $support = $supports[$id];
    $domain = $domains[$id];
    $fee = $fees[$id];
    $sale = $sales[$id];
    modifyProduct($price, $bandwidth, $onlinespace, $support, $domain, $fee, $sale, $id);
}

// Redirection vers la page admin.php
header("Location: admin.php");
exit();
?>


