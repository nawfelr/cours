<?php

if (!empty($_POST)) {
    if (!empty($_POST['reservation_text'])) {

        extract($_POST);
        echo $reservation_text;

        $sqlInsertReservation = "UPDATE `produit` SET `reservation_text`='$reservation_text' WHERE id_produit = $id_produit";
        mysqli_query($BDD_connect, $sqlInsertReservation);
    }
}
