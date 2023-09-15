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
        if (!empty($nombre1 = filter_var($nombre1, FILTER_SANITIZE_SPECIAL_CHARS))) {

            if ($erreur != "") {
                die($erreur);
            } else {

                if ($nombre1 % 2 == 0) {
                    echo "$nombre1 est un nombre pair";
                } else {
                    echo "$nombre1 est un nombre impair";
                }
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
                    <td><label>Nombre </label></td>
                    <td><input type="number" placeholder="" name="nombre1" /> </td>
                </tr>


                <tr>
                    <td colspan="2"><input type="submit" name="Envoyer" value="Calculer" /> </td>
                </tr>
            </table>
        </fieldset>

</body>

</html>