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

    <?php

    if (isset($_POST['Envoyer'])) {
        $erreur = "";
        //La fonction extract($_POST) permet d'extraire les données du tableau $_POST et de créer des variables avec les noms correspondants
        extract($_POST);
        // FILTER_SANITIZE_SPECIAL_CHARS permet de nettoyer le nom et le prénom en supprimant les caracères spéciaux
        if (!empty($nombre1 = filter_var($nombre1)) && !empty($nombre2 = filter_var($nombre2))) {

            if ($erreur != "") {
                die($erreur);
            } else {

                $resultat = " la somme de $nombre1 et $nombre2 est =" . $nombre1 + $nombre2;


                echo $resultat;
            }
        } else {
            echo "Veuillez remplir les deux champs";
        }
    }
    echo "<br> <br>"
    ?>




    <form method="POST">

        <fieldset>
            <!-- L'élément HTML <fieldset> est utilisé afin de regrouper plusieurs contrôles interactifs ainsi que des étiquettes (<label>) dans un formulaire HTML. -->
            <legend>Formulaire de sommes </legend>
            <!-- La balise Table pour formater l'affichage du formulaire -->
            <table>
                <tr>
                    <td><label>Nombre 1</label></td>
                    <td><input type="number" placeholder="" name="nombre1" /> </td>
                </tr>
                <tr>
                    <td><label>Nombre 2</label></td>
                    <td><input type="number" placeholder="" name="nombre2" /></td>
                </tr>

                <tr>
                    <td colspan="2"><input type="submit" name="Envoyer" value="Calculer" /> </td>
                </tr>
            </table>
        </fieldset>

</body>

</html>