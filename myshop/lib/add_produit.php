<?php

require_once('bdd.php');


if (!empty($_POST)) {
    if (!empty($_POST['title']) && !empty($_POST['description']) && !empty($_POST['price']) && !empty($_POST['city']) && !empty($_POST['postal_code']) && !empty($_FILES['image'])) {

        extract($_POST);
        // print_r($_POST);

        // $sqlSelectProduct = "SELECT * FROM `product` ";
        // $tableSelectProduct = mysqli_query($db_connect, $sqlSelectProduct);
        // $product = mysqli_fetch_all($tableSelectProduct, MYSQLI_ASSOC);



        // print_r($_FILES);
        $image = $_FILES['image']['name'];


        $uploadImage = "./image/";
        $uploadFile = $uploadImage . $_FILES["image"]['name'];
        // "assets/images/téléchargement(1).jpg"


        if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadFile)) {
            echo "Image Niquel !";
        } else {
            echo "!!! Image hacker !!!";
        }


        $sqlInsertProduit = "INSERT INTO `produit`( `title`, `description`, `price`, `city`, `postal_code`, `image`) VALUES ('$title','$description','$price','$city','$postal_code','$image')";

        if (mysqli_query($BDD_connect, $sqlInsertProduit)) {
            header('Location: ./index.php');
        } else {
            echo "Le produit n'a pas été ajouté à la base de donnée";
        }
    }
}
