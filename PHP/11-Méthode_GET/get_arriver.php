<?php

if ($_GET) {
    echo $_GET['produit'] . " a la " . $_GET['variete'] . '<br>';
    echo "Vendu au prix de " . $_GET['prix'] . "€, aujourd'hui seulement ! ";
}

foreach ($_GET as $indice => $valeur) {
    echo "<p> La valeur $valeur a pour indice $indice </p>";
}
