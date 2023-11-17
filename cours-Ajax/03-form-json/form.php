<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AJAX avec Json</title>
    <style>
        form {
            width: 50%;
            margin: 0 auto;
            padding: 20px;
        }

        select {
            width: 100%;
            height: 30px;
            border: 1px solid #333;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <div style="width: 1000px; margin: 0 auto; padding: 20px;">
        <!-- form>label{Choisir une personne}+select#personne[onchange="monAjax()"]>option*7^^hr+div#resultat -->
        <form action="">
            <label for="">Choisir une personne</label>
            <select name="" id="personne" onchange="monAjax()">
                <!-- sur les attributs html qui débutent par "on" il n'y a pas de camel case en JS (JS est sensible à la casse) -->
                <option value="">...</option>
                <option>chevel</option>
                <option>cottet</option>
                <option>grand</option>
                <option>fellier</option>
                <option>lafaye</option>
                <option>durand</option>
            </select>
        </form>
        <hr>
        <div id="resultat"></div>

        <?php

        // On a commencé par écrire le code ici pour voir ce qui se passe
        // $fichier = file_get_contents('fichier.json');
        // $tableau = json_decode($fichier); // format array / object
        // $tableau = json_decode($fichier, true); // format array / array
        // echo '<pre>'; var_dump($tableau); echo '</pre>'; 

        ?>
    </div>

    <script>
        // la fonction est mise en place dans le HTML
        function monAjax() {
            var fichier = 'ajax.php';
            var valeur = document.getElementById('personne').value;
            alert(valeur);
            var params = 'choix=' + valeur;
            alert(params);

            // instanciation de l'objet ajax avec prise en compte d'internet explorer
            if (window.XMLHttpRequest) {
                var xhttp = new XMLHttpRequest();
            } else {
                // pour internet explorer / edge
                var xhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }

            // on définit comment on communique - méthode & fichier de traitement
            xhttp.open("POST", fichier,
                true); // le fichier cible est là où il y aura tout le code qui fera le traitement, la tâche de fond que l'utilisateur ne voit pas
            xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

            xhttp.onreadystatechange = function() {

                if (xhttp.readyState == 4 && xhttp.status == 200) {
                    console.log(xhttp.responseText);
                    alert(xhttp.responseText);
                    // on transforme la réponse (string) en objet JSON (JavaScript Object Notation)
                    var response = JSON.parse(xhttp.responseText);
                    alert(response.contenu);
                    document.getElementById('resultat').innerHTML = response
                        .contenu; // on appelle l'indice créé cf. ligne 7 dans ajax.php
                }
            }

            xhttp.send(params); // on envoie la requête

        }
    </script>

</body>

</html>