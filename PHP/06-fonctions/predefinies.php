<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Predefinies</title>
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
    // Les fonctions predefinies sont celles qui sont déjà codées, mises à notre disposition par php (par exemple isset())

    // 01- strlen () et iconv_strlen ()
    //  Les deux permettent de tester la longueur d'une chaine de caractère (pour que par exmple on n'entre pas 200 caractères pour un psuedo, on va limiter au maximum 20)

    $phrase = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis, excepturi!";

    // Le resultat trouvé sera 77
    echo iconv_strlen($phrase) . "<br>"; // icon_strlen compte seulement les caractères afficher

    echo strlen($phrase) . "<br>"; // strlen utilise le nombre d'octet utilisé par chaque caractère

    $phrase2 = "étés";

    echo iconv_strlen($phrase2) . "<br>";

    echo strlen($phrase2) . "<br>";


    // 02- substring
    // fonction prédéfinies qui permet de séléctionner une chaine de caractère à des endroits précis et permet de supprimer le reste
    // Elle prend 3 paramètres. La chaine a découper, le point de départ et le point d'arrivée 
    // je veux conserver la 1er moitié de ma chaine de caractères 

    $phrase = "lepoles2023poissynawfel";
    echo substr($phrase, 0, 16) . "<br>";

    echo substr($phrase, 0, -4) . "<br>"; // Ici substr prendra tous les caractères sauf les 4 derniers

    // 03- date ()
    // Celle-ci permet de récupérer l'année en cours

    echo date('d/m/Y') . "<br>";

    echo "&copy " . date(' Y') . " Delia" . "<br>";

    // echo date("D-M-Y"); ou 
    echo date("D/M/Y") . "<br>";

    // 04 - Empty, contrairement à isset, la fonction vérifie si la variable (qui exsite) contient une valeur 

    $phrase3 = ""; // La variable n'a pas reçu de contenu
    $phrase3 = " "; // La variable a  reçu de contenu (un espace)


    if (empty($phrase3)) {
        echo " La variable n'a pas reçu du contenu <br>";
    } else {
        echo " La variable a reçu du contenu <br>";
    }




    ?>

</body>

</html>