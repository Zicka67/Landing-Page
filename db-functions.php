<!-- Fichier copier/coller de l'exercice d'avant " INSERER-BDD " et arrangé pour cet exercice + comment chaque ligne pour plus tard -->

<?php
function dbFunction()
{
    try {
        // connexion à MySQL
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
        // return $db
        return $db;
    } catch (Exception $e) {
        // En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : ' . $e->getMessage());
    }
}

// Fonction pour récupérer tous les produits à la bd
function findAll()
{
    // Appel de la fonction de connexion à la bd
    $db = dbFunction();

    // Requête SQL pour récupérer tous les produits
    $sqlRequest = 'SELECT * FROM pricing';
    // Préparation de la requête
    $storeStatement = $db->prepare($sqlRequest);

    // Exécution de la requête
    $storeStatement->execute();
    // Récupération des résultats
    $store = $storeStatement->fetchAll();
    // Return les résultats
    return $store;
}

// Fonction pour récupérer un produit par son identifiant
function findOneById($id)
{
    // Appel de la fonction de connexion à la bd
    $db = dbFunction();

    // Requête SQL pour récupérer un produit en fonction de son identifiant
    $sqlRequest = 'SELECT * FROM pricing WHERE id= :id';
    // Préparation de la requête
    $storeStatement = $db->prepare($sqlRequest);

    // Exécution de la requête en passant l'identifiant en paramètre
    $storeStatement->execute([':id' => $id]);
    // Récupération des résultats
    $store = $storeStatement->fetch();
    // Return les résultats
    return $store;
}
// Fonction pour add un nouveau produit à la bd
function addProduct($name, $price, $bandwidth, $onlinespace, $support, $domain, $fees)
{
    // Appel de la fonction de connexion à la bd
    $db = dbFunction();
    // requête SQL pour insérer des données dans une table nommée "pricing". 
    // Les colonnes de la table sont "name", "price", "bandwidth", "onlinespace", "support", "domain", et "fees". 
    // Les valeurs à insérer sont passées via des paramètres nommés (:name, :price, etc.), ce qui peut aider à prévenir les attaques par injection SQL.
    $sqlInsert = 'INSERT INTO pricing (name, price, bandwidth, onlinespace, support, domain, fees)
    VALUES (:name, :price, :bandwidth, :onlinespace, :support, :domain, :fees)';
    // Préparation de la requête
    $storeStatement = $db->prepare($sqlInsert);
    // Exécution de la requête en passant les informations du produit en paramètre
    $storeStatement->execute(
        [
            ':name' => $name,
            ':price' => $price,
            ':bandwidth' => $bandwidth,
            ':onlinespace' => $onlinespace,
            ':support' => $support,
            ':domain' => $domain,
            ':fees' => $fees
        ]
    );
    // Récupération des résultats
    $store = $storeStatement->fetch();
    // Return les résultats
    return $store;
}


// Fonction pour modifier le contenu d'un produit
function modifyProduct($price, $bandwidth, $onlinespace, $support, $domain, $fees, $sale, $id)
{
    //Appel de la fonction de connexion à la base de données
    $db = dbFunction();
    $sqlUpdate = "UPDATE pricing SET price = :price, bandwidth = :bandwidth, onlinespace = :onlinespace, support = :support, domain = :domain, fees = :fees, sale = :sale WHERE id = :id";
    //Preparation de la requête
    $statement = $db->prepare($sqlUpdate);

    //Execution de la requête
    $statement->execute(
        [
            ':id' => $id,
            ':price' => $price,
            ':bandwidth' => $bandwidth,
            ':onlinespace' => $onlinespace,
            ':support' => $support,
            ':domain' => $domain,
            ':fees' => $fees,
            ':sale' => $sale

        ]
    );

    // Récupération des résultats
    // $store = $statement->fetch();
    // // Return les résultats
    // return $store;
}


function upQtt($id) {
    // Connexion à la bd
    $db = dbFunction();

    // Requête SQL pour récupérer un produit en fonction de son id
    // $sqlRequest = 'SELECT * FROM pricing WHERE id= :id';

    //Mise a jour
    $sqlRequest = 'UPDATE pricing SET qtt=qtt+1 WHERE id= :id';

    // Prep de la requête
    $stmt = $db->prepare($sqlRequest);

    // Exécution de la requête en passant l'identifiant en paramètre
    $stmt->execute([':id' => $id]);

    // Récupération des résultats
    // $result = $stmt->fetch();

    // // Retourne les résultats
    // return $result;
}