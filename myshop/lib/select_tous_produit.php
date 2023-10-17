<?php

$sqlSelectProduit = "SELECT * FROM `produit`";

$tableSelectProduit = mysqli_query($BDD_connect, $sqlSelectProduit);
$produit = mysqli_fetch_all($tableSelectProduit, MYSQLI_ASSOC);
