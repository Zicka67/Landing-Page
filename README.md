Permet d'afficher une page d'admin pour update les prix des 3 offres du site.

Le fichier admin.php démarre une session PHP et se connecte à une base de données (dont les fonctions sont définies dans le fichier db-functions.php). Il récupère les informations sur les offres en utilisant la fonction findAll et les affiche sur la page avec un formulaire pour les mettre à jour.

Le fichier update-pricing.php traite les données envoyées à partir du formulaire dans la page admin.php. Il récupère les valeurs des champs de formulaire, met à jour les enregistrements dans la base de données en utilisant la fonction modifyProduct dans le fichier db-functions.php, et enfin redirige l'utilisateur vers la page admin.php.

Le fichier db-functions.php définit les fonctions nécessaires pour se connecter à la base de données et mettre à jour les enregistrements. La fonction modifyProduct prend en entrée les nouvelles valeurs pour les différents champs et met à jour les enregistrements correspondants dans la base de données.

