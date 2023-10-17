<?php
$sqlSelectProduct = "SELECT * FROM `product` INNER JOIN `user` ON product.id_user = user.id_user";

$tableSelectProduct = mysqli_query($db_connect, $sqlSelectProduct);
$product = mysqli_fetch_all($tableSelectProduct, MYSQLI_ASSOC); // Permet de convertir les données en tableau multi dimensionnelle

// print_r($product);
