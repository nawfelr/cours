<?php session_start();


echo $_GET['id_product'];
$id_produit = $_GET['id_product'];

require_once("../lib/db.php");
// DB.php nous connect à la BDD et nous donner carte blanche pour faire des requetes SQL




// $sqlSelectProduct = "SELECT * FROM `product` ";
// $tableSelectProduct = mysqli_query($db_connect, $sqlSelectProduct);
// $product = mysqli_fetch_all($tableSelectProduct, MYSQLI_ASSOC);






$sqlDeletProduct = "DELETE FROM `product` WHERE id_produit= $id_produit";
mysqli_query($db_connect, $sqlDeletProduct);
print_r(mysqli_query($db_connect, $sqlDeletProduct));




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
    <h1> Votre produit a bien été supprimé </h1>
    <br>
    <br>

    <a href="../index.php">Retourner au DASHBOARD</a>


    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>