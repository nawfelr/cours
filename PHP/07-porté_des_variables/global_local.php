<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Porté des variables</title>
    <style>
        /* Navbar container */
        .navbar {
            overflow: hidden;
            background-color: #333;
            font-family: Arial;
        }

        /* Links inside the navbar */
        .navbar a {
            float: left;
            font-size: 16px;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        /* The dropdown container */
        .dropdown {
            float: left;
            overflow: hidden;
        }

        /* Dropdown button */
        .dropdown .dropbtn {
            font-size: 16px;
            border: none;
            outline: none;
            color: white;
            padding: 14px 16px;
            background-color: inherit;
            font-family: inherit;
            /* Important for vertical align on mobile phones */
            margin: 0;
            /* Important for vertical align on mobile phones */
        }

        /* Add a red background color to navbar links on hover */
        .navbar a:hover,
        .dropdown:hover .dropbtn {
            background-color: red;
        }

        /* Dropdown content (hidden by default) */
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        /* Links inside the dropdown */
        .dropdown-content a {
            float: none;
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }

        /* Add a grey background color to dropdown links on hover */
        .dropdown-content a:hover {
            background-color: #ddd;
        }

        /* Show the dropdown menu on hover */
        .dropdown:hover .dropdown-content {
            display: block;
        }
    </style>
</head>

<body>
    <div class="navbar">
        <div class="dropdown">
            <button class="dropbtn">Affichage
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="../01-affichage/instructions.php">instructions</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn">Variables et constantes
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="../02-variables-et-constantes/variables.php">Variables</a>
                <a href="../02-variables-et-constantes/constantes.php">Constantes</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn">Concatenations et Syntaxe
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="../03-concatenations_et_syntaxe/concatenation.php">Concatenations</a>
                <a href="../03-concatenations_et_syntaxe/syntaxes.php">Syntaxe</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn">Opérateurs arithmétiques
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="../04-opérateurs_arithmétiques/arithmétiques.php">Arithmatiques</a>
                <a href="../04-opérateurs_arithmétiques/opérateurs_affectations.php">Opérateurs affectations</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn">Conditions
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="../05-conditions/if_else.php">if / else</a>
                <a href="../05-conditions/switch.php">Switch</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn">Fonctions
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="../06-fonctions/exo_tva.php">EXO</a>
                <a href="../06-fonctions/predefinies.php">Predefinis</a>
                <a href="../06-fonctions/utilisateur.php">Utilisateur</a>
            </div>
        </div>

        <div class="dropdown">
            <button class="dropbtn">Variable globales et locales
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="../07-porté_des_variables/global_local.php">Global-Locales</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn">Boucles
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="../08-boucles/boucles.php">Boucles</a>
            </div>
        </div>
    </div>
    </div>




    <?php

    // Les variables déclarées dans l'un des deux espaces ne sont pas reconnues automatiquement dans l'autre espace

    // Du global vers le local
    // Ci dessous, la variable $pays déclarée dans l'espace global ne sera pas reconnue dans l'espace local (dans la fonction) si je n'utilise pas le mot clé global pour importer ma variable dans l'espace local sinon, ERROR undefined variable $pays

    $pays = "France";

    function affichePays()
    {
        global $pays;
        echo $pays;
    }
    echo affichePays() . '<br>';
    // du local au global

    function afficheJour()
    {
        $jour = "Vendredi";
        // Pour récupérer la valeur de la variable $jour dans mon espace global, je dois utiliser le mot clé return sinon même erreur undefined variable $jour
        return $jour;

        // La ligne en dessous ne s'affichera pas car tous ce qui est codé après le return n'est pas exécuté 
        echo "Demain nous serons samedi <br>";
    }

    echo afficheJour() . '<br>';



    ?>


</body>

</html>