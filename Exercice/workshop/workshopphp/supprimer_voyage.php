<?php


// connexion à la base de données 
$mysqli = new mysqli('localhost', 'root', '', 'voyage');

if ($mysqli->connect_error) {
    die('Erreur de connexion à la base de données: ' . $mysqli->connect_error);
}


// Vérifier si un voyage a été selectionner

if (isset($_POST['voyage_id']) && is_numeric($_POST['voyage_id'])) {
    $id_voyage = $_POST['voyage_id'];
    // Supprimer le voyage de la base de données
    $sql = "DELETE FROM produits
                WHERE id = $id_voyage";

    if ($mysqli->query($sql)) {
        echo "Voyage supprimer avec succés.<br>";
        echo "<a href=\"index.php\">Retour à la page d'accueil</a> ";
    } else {
        echo "Erreur lors de la suppression du voyage: " . $mysqli->error;
    }
} else {
    echo "Aucun voyage sélectionné";
}
$mysqli->close();

// Supprimez le voyage de la base de données
?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Confirmation de suppression de Voyage</title>
</head>

<body>
    <header>
        <h1>Confirmation de suppression de Voyage</h1>
    </header>
    <section id="confirmation-message">


    </section>
</body>

</html>