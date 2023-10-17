<?php


$id_produit = $_GET['id_produit'];

$sqlSelectProduitId = "SELECT * FROM `produit` WHERE id_produit = $id_produit";

$tableSelectProduitId = mysqli_query($BDD_connect, $sqlSelectProduitId);
$produitId = mysqli_fetch_all($tableSelectProduitId, MYSQLI_ASSOC);
