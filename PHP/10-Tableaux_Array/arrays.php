<?php

// Une variable permet de stocker des valeurs 
$listePrenom = " Asuma, Naruto, Kabuto, Hinata";

echo $listePrenom . '<br>';

$tableauPrenom = array(" Asuma", "Naruto", "Kabuto", "Hinata", 15);

echo "<pre>";
print_r($tableauPrenom);
"</pre>";

echo '<br>';

echo "<pre>";
var_dump($tableauPrenom);
"</pre>";
// var_dump va afficher le lenght (nombre de caracteres) de chaque mot (strlen au lieu de iconv_strlen, affiche la longueur en fonction du nombre d'octer utilié par la variable)

echo "<br>";
echo $tableauPrenom[1] . "<br>";

// Autre syntaxe pour déclarer un tableau
// Elle est plus pratique que la première pour ajouter des éléments au tableau au fur et a mesure de notre code si on ne les connait pas tous au départ.

$listePays[] = "France";
$listePays[] = "Japon";
$listePays[] = "Espagne";
$listePays[] = "Italie";
$listePays[] = "Maroc";
$listePays[] = "Roumanie";

// boucle foreach adapté aux tableau

foreach ($listePays as $indice => $valeur) {
    echo "<p>" . $valeur . " a pour indice " . $indice . "</p>";
}

// foreach version ul/li

echo "<ul>";
foreach ($listePays as $valeur) {
    echo "<li> La valeur" . $valeur . " a pour indice " . $indice . "</li>";
}
echo "</ul>";

// Permet d'afficher le tableau sous forme de chaine de caractère; sépare chaque élément avec le 1er argument de la fonction (ici  c'est le " - ")
echo "<p>" . implode(' - ', $tableauPrenom) . "</p>";

// count et sizeof

// sizeof() fonction est un alis de la fonction count
// Les 2 renvoie le nombre d'élément d'un tableau
// Sizeof() prend un temps d'execution plus long
echo count($tableauPrenom) . "<br>";
echo sizeof($tableauPrenom) . "<br>";
