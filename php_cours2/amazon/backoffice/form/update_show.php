<?php

session_start();



$id_produit = $_GET['id_product'];

require_once("../lib/db.php");
// DB.php nous connect à la BDD et nous donner carte blanche pour faire des requetes SQL
$id_user =  $_SESSION['id_user'];


$sqlSelectShow = "SELECT `show` FROM `product` WHERE id_produit= $id_produit ";
$tableSelectShow = mysqli_query($db_connect, $sqlSelectShow);
$show = mysqli_fetch_all($tableSelectShow, MYSQLI_ASSOC);
// print_r($show['0']['show']);



if ($show['0']['show'] == 0) {
    $sqlModifyProduct = "UPDATE `product` SET `show`=1 WHERE id_produit= $id_produit ";
    mysqli_query($db_connect, $sqlModifyProduct);
} elseif ($show['0']['show'] == 1) {

    $sqlModifyProduct = "UPDATE `product` SET `show`=0 WHERE id_produit= $id_produit ";
    mysqli_query($db_connect, $sqlModifyProduct);

}

header('Location:../index.php');




// if (mysqli_query($db_connect, $sqlModifyProduct)) {
// }
