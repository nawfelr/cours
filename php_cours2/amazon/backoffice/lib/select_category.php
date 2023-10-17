<?php
$sqlSelectCategory = "SELECT * FROM `category`  ";

$tableSelectCategory = mysqli_query($db_connect, $sqlSelectCategory);

$category = mysqli_fetch_all($tableSelectCategory, MYSQLI_ASSOC);





// Permet de convertir les données en tableau multi dimensionnelle
// print_r($category);
