<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> If / Else</title>
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
    // Je déclare 5 vriables que je vais tester

    $a = 22;
    $b = 33;
    $c = 44;
    $d = 55;
    $d = 66;

    // 01 - if else simple
    //  Le if va tester  (ce qu'on lui propose entre les paranthéses) 
    // Si c'est vrai (TRUE) il exécute ce qu'il y a dans le bloc d'instruction. Si c'est faux (FALSE), il execute ce qui est dans le bloc d'instructions du else.

    if ($a < $b) {
        echo "Vrai $a est bien inférieur à $b <br> ";
    } else {
        echo " Faux $a n'est pas inférieur à $b";
    }

    // En php on est pas obligé de coder le ELSE, on peut tester quelque chose et si c'est vrai on éxecute ce qui est dans le bloc d'instruction.

    // Mais si c'est faux , si on ne rentre pas dans ce cas de figure, on continue simplement à exécuter la suite du code

    if ($b < $c) {
        echo "vrai $b est bien inférieur à $c <br>";
    }

    // 02 - Avec && (AND)
    // Avec && les deux test doivent être TRUE sinon on rendre dans le else (le False)

    if ($a < $b && $b > $c) {
        echo "Vrai, les deux informations sont exactes <br> ";
    } else {
        echo "faux, une des deux information n'est pas verifiée <br> ";
    }

    //  03 - || (OR)
    // Avec || une seule des deux conditions verifiées suffisent a entrer dans le TRUE (le bloc d'instruction du if)

    if ($a < $b || $b > $c) {
        echo "Vrai, une des deux affirmations est exacte <br> ";
    } else {
        echo " Faux, aucune des deux affirmations n'est verifiée <br> ";
    }


    // 04-Avec XOR (ou exclusif)
    //  XOR exige qu'une seule des deux affirmations soit exacte. Si les deux sont ecaxtes ou les deux fausses, on entre dans le else

    if ($a < $b xor $b > $c) {
        echo "Vrai, une seule des deux affirmations est exacte <br> ";
    } else {
        echo " Faux, les deux affirmations sont verifiées<br> ";
    }

    // 05- Avec IF / else if / else
    // Condition avec trois possibilités. Si la première n'est pas verifiée, on entre dans la seconde (elseif). Si cette dernière est toujours fausse, on entre dans le else

    if ($a > $b) {
        echo "$a est bien supérieur a $b";
    } elseif ($a != 22) {
        echo "vrai, $a est différent de 22";
    } else {
        echo " Faux aucune des deux information n'est vraie <br>";
    }


    // 06- Conditions contractée (appelée aussi ternaire)
    // La condition contractée est utilisée quand on doit coder en PHP dans un bloc HTML 
    // Elle permet une syntaxe plus condensée
    /*
if ($a < $b){
 echo "vrai $a est bien inférieur à $b";
} else {
    echo " Faux $a n'est pas inférieur à $b"; 
}
*/
    // La condition ternaire ci-dessous est équivalente de la condition mise en commentaire au dessus

    // Entre les parenthèses, on écrit toujours ce que l'on veut tester 
    // Après le ? on écrit le bloc d'instructions du if 
    // Après les : on écrit le bloc d'instruction du else

    echo ($a < $b) ? " Vrai $a est bien inférieur à $b <br> " : "Faux ";

    // 07- if / else avec == et ===

    $var = 100;
    $var2 = "100";
    //  Ne test que la valeur 
    if ($var == $var2) {
        echo "Vrai $var et $var2 ont la même valeur <br> ";
    } else {
        echo "Faux $var et $var2 n'ont pas la même valeur <br> ";
    }

    // Test la valeur et le type

    if ($var === $var2) {
        echo "Vrai $var et $var2 ont la même valeur et le même type <br>";
    } else {
        echo "Faux $var et $var2 n'ont pas la même valeur et/ou type <br>";
    }

    // 08-if (isset) / else

    // isset () est une fonction prédéfinit pour tester si une variable éxiste, à été declarée avant dans le script.
    // C'est très utile pour savoir si on continue à dérouler le code, à l'exécuter ou stopper avec un message d'erreur

    if (isset($test)) {
        echo "la variable test exist <br>";
    } else {
        echo "la variable test n'existe pas <br>";
    }

    $test = TRUE;

    // Code de la même condition en version contractée, en ternaire (utile lorsque l'on est dans un bloc HTML)

    echo (isset($test)) ? "la variable test exist <br>" : "la variable test n'existe pas ";
