<?php
// Connection à la DB
require_once('db-functions.php');

// Récupération des données envoyées à partir du formulaire
$prices = $_POST['price'];
$sales = $_POST['sale'];
$bandwidths = $_POST['bandwidth'];
$onlinespaces = $_POST['onlinespace'];
$supports = $_POST['support'];
$domains = $_POST['domain'];
$fees = $_POST['fees'];

// Boucle pour mettre à jour les enregistrements dans la base de données
foreach ($prices as $id => $price) {
    $feesValue = isset($fees[$id]) ? $fees[$id] : ''; //verification
    $price = intval($prices[$id]);
    $support = intval($supports[$id]);
    // if (isset($_POST['fees']['1'])) {
    //     $fees = $_POST['fees']['1'];
    //   } else {
    //     $fees = "";
    //   }
    modifyProduct($prices[$id], $bandwidths[$id], $onlinespaces[$id], $supports[$id], $domains[$id], $fees, $sales[$id], $id);
}

// Redirection vers la page admin.php
header("Location: admin.php");
exit();
?>


