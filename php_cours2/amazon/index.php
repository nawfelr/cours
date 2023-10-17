<?php
session_start();
// print_r($_SESSION);

// ini_set('display_errors', 'off');
require_once('./backoffice/lib/db.php'); //fichier qui nous donne accés à la BDD
require_once('./backoffice/lib/select_product.php'); // requete SQL de la table produit
require_once('./backoffice/lib/select_category.php'); // requete SQL de la table category
require_once('./backoffice/lib/select_dropdown.php');
// print_r($_SESSION)
$id_category = $_GET['id_category'];

if (!empty($id_category)) {
    $sqlSelectCategoryId = "SELECT `id_category` FROM `category`WHERE id_category= $id_category ";
    $tableSelectCategoryId = mysqli_query($db_connect, $sqlSelectCategoryId);
    $categoryId = mysqli_fetch_all($tableSelectCategoryId, MYSQLI_ASSOC); // Permet de convertir les données en tableau
    // print_r($tableSelectCategoryId);


    if (mysqli_num_rows($tableSelectCategoryId) == 0) {

        header('Location: index.php');
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
    <link href="css/styles.css" rel="stylesheet" />
</head>



<body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="./index.php">MyShop</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <div class="dropdown">

                        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                            <li class="nav-item"><a class="nav-link active" aria-current="page" href="./index.php">Accueil</a></li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
                                <!-- <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#!">All Products</a></li>
                                </ul> -->
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="./index.php"> Tous les produits</a></li>
                                    <?php foreach ($categorydd as $c) {
                                    ?>
                                        <li><a class="dropdown-item" href="./index.php?id_category=<?php print_r($c['id_category']); ?>"><?php print_r($c['category_name']); ?></a></li>
                                    <?php
                                    } ?>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </ul>







                <?php if (empty($_SESSION)) { ?>

                    <form class="d-flex" style="    margin-right: 10px;">
                        <a class="btn btn-outline-dark" href="backoffice/login.php">
                            <i class="bi-box-arrow-in-right me-1"></i>
                            connexion
                            <!-- <span class="badge bg-dark text-white ms-1 rounded-pill">0</span> -->
                        </a>
                    </form>
                    <form class="d-flex">
                        <a class="btn btn-outline-dark" href="backoffice/register.php">
                            <i class="bi-file-earmark-diff me-1"></i>
                            inscription
                            <!-- <span class="badge bg-dark text-white ms-1 rounded-pill">0</span> -->
                        </a>
                    </form>
                <?php } else { ?>
                    <form class="d-flex">
                        <a class="btn btn-outline-dark" href="./backoffice/lib/deconnexion.php">
                            <i class="bi-file-earmark-diff me-1"></i>
                            déconnexion
                            <!-- <span class="badge bg-dark text-white ms-1 rounded-pill">0</span> -->
                        </a>
                    </form>
                <?php } ?>

                <?php if (!empty($_SESSION)) {
                    ($_SESSION['user_statut'] != 0); { ?>
                        <form class="d-flex" style="    margin-left: 10px;">
                            <a class="btn btn-outline-dark" href="backoffice/index.php">
                                <i class="bi-box-arrow-in-right me-1"></i>
                                dashboard
                                <!-- <span class="badge bg-dark text-white ms-1 rounded-pill">0</span> -->
                            </a>
                        </form>

                <?php }
                } ?>





            </div>
        </div>
    </nav>
    <!-- Header-->
    <header class="bg-dark py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder">Shop in style</h1>
                <p class="lead fw-normal text-white-50 mb-0">With this shop hompeage template</p>
            </div>
        </div>
    </header>
    <!-- Section-->
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">



                <!-- -------------  MES PRODUITS RECUPEREES DEPUIS LA BASE DE DONNEE ------------------ -->

                <?php foreach ($product as $i) {
                    if ($i['show'] == 1) {

                        if ($id_category == $i['id_category'] || $id_category == null) {

                ?>


                            <div class="col mb-5">
                                <div class="card h-100">
                                    <!-- Sale badge-->

                                    <!-- ENCADRE POUR LES PROMOS SI IL Y EN A  -->
                                    <?php if ($i['discount'] != 0) {
                                    ?>
                                        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem"> <?php echo $i['discount']; ?> %</div>
                                    <?php } ?>



                                    <!--  -------------------   IMAGE DU PRODUIT --------------------- -->
                                    <img class="card-img-top" src="./backoffice/image/<?php echo $i['image_produit']; ?>" alt="..." style="height:230px;" />


                                    <!-- Product details-->
                                    <div class="card-body p-4">
                                        <div class="text-center">
                                            <!-- Product name-->
                                            <h5 class="fw-bolder"> <?php echo $i['title']; ?> </h5>
                                            <!-- Product price-->
                                            <?php if ($i['discount'] != 0) {
                                                $promo = $i['price'] - ($i['price'] * ($i['discount'] / 100)); ?>
                                                <span class="text-muted text-decoration-line-through"><?php echo $i['price'] ?> € </span>
                                            <?php } else if ($i['discount'] = null || $i['discount'] == 0) {
                                                $promo = $i['price']; ?>

                                            <?php }
                                            echo $promo; ?> €
                                        </div>
                                    </div>
                                    <!-- Product actions-->
                                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                        <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                                    </div>
                                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                        <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="./fiche_produit.php?id_product=<?php echo $i['id_produit']; ?>">Voir fiche produit</a></div>
                                    </div>
                                </div>
                            </div>
                <?php


                        }
                    }
                }

                ?>


            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Your Website 2021</p>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>