<?php

$sqlSelectProduit15 = "SELECT * FROM `produit` ORDER BY id_produit DESC LIMIT 15";

$tableSelectProduit15 = mysqli_query($BDD_connect, $sqlSelectProduit15);
$produit15 = mysqli_fetch_all($tableSelectProduit15, MYSQLI_ASSOC);
