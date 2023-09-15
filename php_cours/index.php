<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>PHP</h1>
    <h2> Premier cours !</h2>

    <style>
        h1 {
            color: red;
        }
    </style>

    <script>
        var toto = "toto";
        console.log(toto);
    </script>

    <?php

    $prenom = "Nawfel"; //string
    echo $prenom;

    $age = 23; // int
    $vrai = true; // Boolean
    $float = 19.99; // int

    if ($age >= 18) {
        echo " <br> L'utilisateur est majeur <br>";
    } else {
        echo " <br> L'utilisateur est mineur <br>";
    }

    for ($i = 1; $i < 10; $i++) {
        echo " <div>
        Produit numéro " .  $i . "  <br> 
        
        
        </div>";
    }

    $color = array('red', 'blue', 'purple', 'yellow', 'black');
    print_r($color);

    foreach ($color as $c) {
        echo "<br>" . $c;
    }

    for ($o = 0; $o < count($color); $o++) {
        echo "<br>" . $color[$o];
    }

    $nbrDiv = 4;

    for ($div = 0; $div < 4; $div++) {
        echo "<div style='width:50px; height:50px; background-color:" . $color[$div] . "';> " . $div . " </div>";
    }

    function verifAge($age)
    {
        // Si $age >=18
        if ($age >= 18) {
            echo " <br> OK";
        } else {
            echo "<br> Refusé";
        }
    }

    verifAge(22);
    verifAge(16);

    echo "<br>";
    echo "<br>";
    echo "<br>";

    // Créer une fonction "initiales" qui prend en paramètre votre Nom et votre Prénom et qui renvoie la premiere lettre de chaque chaine
    // exemple

    function nameInit($prenom, $nom)
    { //substr($string, position dans la chaine de caractère, longueur ou nombre de caractère que l'on veut récupérer)
        echo substr($prenom, 0, 1);
        echo substr($nom, 0, 1);

        //Méthode express et + simple
        echo $prenom[0]; // abcdef -> la première lettre soit a = 0
        echo $nom[0];
    }

    nameInit("Boris", "Aubrun");
    echo "<br>";
    nameInit("Cécile", "Weiss");
    echo "<br>";
    nameInit("Mathieu", "Darmon");
    echo "<br>";

    function dice()
    {
        $result = random_int(0, 20);

        if ($result == 20) {
            echo "Réussite";
        } else if ($result == 0) {
            echo "Echec";
        } else {
            echo $result;
        }
    }

    dice();

    // Créer une fonction qui prend en paramètre "Largeur" , "Longueur" et "Couleur" qui aura pour but de créer un bloc html avec les dimensions précedements données.
    // Largeur et Longueur devront-être aléatoire entre 10px et 140px, couleur devra être défini par nos soins

    function createDiv($bgcolor)
    {
        $long = random_int(10, 140);
        $larg = random_int(10, 140);
        echo "<div style='width:" . $larg . "px ; height:" . $long . "px ; background-color: $bgcolor;'> </div>";
    }

    createDiv("red");

    function calculatrice($operateur, $nombre1, $nombre2)
    {
        if ($operateur === "soustraction") {
            echo $nombre1 - $nombre2 . "<br>";
        } elseif ($operateur === "addition") {
            echo $nombre1 + $nombre2 . "<br>";
        } elseif ($operateur === "multiplication") {
            echo $nombre1 * $nombre2 . "<br>";
        } elseif ($operateur === "division") {
            echo $nombre1 / $nombre2 . "<br>";
        } else {
            echo "Vous avez fait une erreur dans vos paramètre";
        }
    }
    echo "<br>";
    echo "<br>";
    echo "<br>";

    calculatrice("soustraction", 15, 3);
    calculatrice("addition", 15, 3);
    calculatrice("multiplication", 15, 3);
    calculatrice("division", 15, 3);
    calculatrice("diion", 15, 3);

    ?>




</body>

</html>