<!-- Une session sert à conserver des informations temporaire. On peut ouvrire une session pour l'utilisateur qui a mis un produit dans son panier mais on n'envoie pas cette information en BDD car elle n'est pas définitive. Peut-être va t-il supprimez ce produit de son panier, ou ajouter un deuxieme etc -->

<?php
// pour qu'une session puisse être débutée et que l'on puisse récupérer ses informations, il faut déclarer en haut du fichier, avant toute chose (doctype etc) un session_start

session_start();

$_SESSION['prenom'] = "Nawfel";
$_SESSION['statut'] = "chef suprême ancestrale des armées du gouvernement et du coeur des femmes";

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session Départ</title>
</head>

<body>
    <button><a href="session_arrive.php">Aller vers le profil</a></button>
</body>

</html>