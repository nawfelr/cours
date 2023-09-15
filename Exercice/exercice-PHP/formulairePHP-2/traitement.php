<?php

if (isset($_POST['Envoyer'])) {
    $erreur = "";
    //La fonction extract($_POST) permet d'extraire les données du tableau $_POST et de créer des variables avec les noms correspondants
    extract($_POST);
    // FILTER_SANITIZE_SPECIAL_CHARS permet de nettoyer le nom et le prénom en supprimant les caracères spéciaux
    if (!empty($nom = filter_var($nom, FILTER_SANITIZE_SPECIAL_CHARS)) && !empty($prenom = filter_var($prenom, FILTER_SANITIZE_SPECIAL_CHARS))) {

        if ($erreur != "") {
            die($erreur);
        } else {

            $resultat = "<h1> Bienvenue $prenom $nom  </h1> ";


            echo $resultat;
        }
    } else {
        echo "Veuillez remplir les deux champs";
    }
}
?>

<!doctype html>
<html>

<head>
    <meta charset="utf-8" />
    <title>formulaire inscription</title>
    <style type="text/css">
        td {
            height: 40px;
        }
    </style>
</head>

<body>
    <form method="POST" action="traitement.php">

        <fieldset>
            <!-- L'élément HTML <fieldset> est utilisé afin de regrouper plusieurs contrôles interactifs ainsi que des étiquettes (<label>) dans un formulaire HTML. -->
            <legend>Formulaire d'inscription</legend>
            <!-- La balise Table pour formater l'affichage du formulaire -->
            <table>
                <tr>
                    <td><label>Nom</label></td>
                    <td><input type="text" placeholder="saisir votre nom" name="nom" /> </td>
                </tr>
                <tr>
                    <td><label>Prenom</label></td>
                    <td><input type="text" placeholder="saisir votre prenom" name="prenom" /></td>
                </tr>

                <tr>
                    <td colspan="2"><input type="submit" name="Envoyer" value="Envoyer" /> <input type="reset" value="Annuler" /></td>
                </tr>
            </table>
        </fieldset>

</body>

</html>