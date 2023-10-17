<?php

require_once('./lib/bdd.php');

require_once('class_article.php');

if (!empty($_POST)) {
    if (!empty($_POST['title']) && !empty($_POST['description']) && !empty($_POST['price']) && !empty($_POST['city']) && !empty($_POST['postal_code']) && !empty($_FILES['image'])) {

        extract($_POST);
        $image = $_FILES['image']['name'];


        $uploadImage = "./image/";
        $uploadFile = $uploadImage . $_FILES["image"]['name'];


        if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadFile)) {
            echo "Image Niquel !";
        } else {
            echo "!!! Image hacker !!!";
        }

        $ajoutProduit = new Produit($db);

        if ($ajoutProduit->insertProduit($title, $description, $price, $city, $postal_code, $image)) {
            header('location:index.php');
        } else {
            echo "Vous n'avez pas ajouter d'article ";
        }
    }
}





?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un produit</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>

    <?php include('components/nav.php'); ?>

    </nav>
    <!-- Header-->
    <header class="bg-dark py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder">Ajouter un produit</h1>
            </div>
        </div>
    </header>

    <form method='POST' enctype='multipart/form-data' style="width:60%; margin:auto;">
        <div class="form-group">
            <label for="title">Titre du produit</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>

        <div class="form-group bord">
            <label for="description">Description</label>
            <input type="text" class="form-control" id="description" name="description">
        </div>


        <div class="form-group bord">
            <label for="price">Prix</label>
            <input type="number" class="form-control" id="price" name="price">
        </div>


        <div class="form-group bord">
            <label for="city">Ville</label>
            <input type="text" class="form-control" id="city" name="city">
        </div>

        <div class="form-group bord">
            <label for="postal_code">Code Postal</label>
            <input type="number" class="form-control" id="postal_code" name="postal_code">
        </div>





        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" class="form-control" id="image" name="image">
        </div>


        <div class="form-group">
            <input type="submit" class="form-control btn-primary" id="form_ajout_produit" value='Créer'>
        </div>

        </div>
    </form>


    <script>
        $(function() {
            $("#form_ajout_produit").click(function() {
                var champsVides = false;

                $("input").each(function() {

                    if ($(this).val() == "") {
                        $(this).css("border-color", "red");
                        champsVides = true;
                    } else {
                        $(this).css("border-color", "black");
                    }
                });
                if (champsVides) {
                    return false;
                }
            });
        });
    </script>


</body>

</html>