<?php session_start();


echo $_GET['id_product'];
$id_produit = $_GET['id_product'];

require_once("../lib/db.php");
// DB.php nous connect à la BDD et nous donner carte blanche pour faire des requetes SQL

if (!empty($_POST)) {
    if (!empty($_POST['title']) && !empty($_POST['price']) && !empty($_POST['description']) && !empty($_FILES['image']) && !empty($_POST['stock']) && !empty($_POST['id_category'])) {

        extract($_POST);
        print_r($_POST);

        // $sqlSelectProduct = "SELECT * FROM `product` ";
        // $tableSelectProduct = mysqli_query($db_connect, $sqlSelectProduct);
        // $product = mysqli_fetch_all($tableSelectProduct, MYSQLI_ASSOC);



        $id_user =  $_SESSION['id_user'];


        $sqlModifyProduct = "UPDATE `product` SET `title`='$title',`price`='$price',`description`='$description',`stock`= '$stock',`id_user`='$id_user',`discount`= '$discount', `id_category`='$id_category' WHERE id_produit= $id_produit ";
        mysqli_query($db_connect, $sqlModifyProduct);
    }
}



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>MyShop</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="../css/sb-admin-2.css" rel="stylesheet" />
</head>



<body>

    <!-- Header-->
    <header class="bg-dark py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder">Modify in style</h1>
                <p class="lead fw-normal text-white-50 mb-0">Modifier votre produit grace à ce formulaire</p>
            </div>
        </div>
    </header>

    <form method="POST" enctype='multipart/form-data' style="width:50%; margin: 20px auto 50px;">
        <div class="mb-3">
            <label for="title" class="form-label">Titre du produit</label>
            <input type="text" name="title" class="form-control" id="title">

        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Prix</label>
            <input type="number" name="price" class="form-control" id="price">

        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description du produit</label>
            <input type="text" name="description" class="form-control" id="description">

        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image du produit</label>
            <input type="file" name="image" class="form-control" id="image">

        </div>
        <div class="mb-3">
            <label for="stock" class="form-label">Stock du produit</label>
            <input type="number" name="stock" class="form-control" id="stock">

        </div>
        <div class="mb-3">
            <label for="discount" class="form-label">Réduction sur le produit</label>
            <input type="number" name="discount" class="form-control" id="discount">

        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Veuillez saisir une catégorie de produits <br> (1 = Jeux video; 2 = Console; 3 = Accessoire)</label>
            <input type="number" class="form-control" id="category" name="id_category">
        </div>



        <button type="submit" name="submit" class="btn btn-primary">Modifier</button>
    </form>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>