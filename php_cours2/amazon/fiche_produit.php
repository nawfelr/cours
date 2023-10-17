<?php
session_start();
// print_r($_SESSION);
$id_produit = $_GET['id_product'];

require_once('./backoffice/lib/db.php'); //fichier qui nous donne accés à la BDD
require_once('./backoffice/lib/select_product.php'); // requete SQL de la table produit

$sqlSelectFicheProduct = "SELECT * FROM `product` WHERE id_produit=$id_produit";

$tableSelectFicheProduct = mysqli_query($db_connect, $sqlSelectFicheProduct);
$ficheProduct = mysqli_fetch_all($tableSelectFicheProduct, MYSQLI_ASSOC);

print_r($ficheProduct);
echo "<br>";
echo $ficheProduct['0']['title'];


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
            <a class="navbar-brand" href="./index.php">My shop</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="./index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#!">About</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#!">All Products</a></li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li><a class="dropdown-item" href="#!">Popular Items</a></li>
                            <li><a class="dropdown-item" href="#!">New Arrivals</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex">
                    <button class="btn btn-outline-dark" type="submit">
                        <i class="bi-cart-fill me-1"></i>
                        Cart
                        <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                    </button>
                </form>
            </div>
        </div>
    </nav>
    <!-- Product section-->
    <section class="py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="row gx-4 gx-lg-5 align-items-center">
                <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="./backoffice/image/<?php echo $ficheProduct['0']['image_produit']; ?>" alt="..." /></div>
                <div class="col-md-6">
                    <div class="small mb-1">SKU: BST-498</div>
                    <h1 class="display-5 fw-bolder"><?php echo $ficheProduct['0']['title']; ?></h1>
                    <div class="fs-5 mb-5">
                        <?php if ($ficheProduct['0']['discount'] != 0) {
                            $promo = $ficheProduct['0']['price'] - ($ficheProduct['0']['price'] * ($ficheProduct['0']['discount'] / 100)); ?>
                            <span class="text-decoration-line-through"><?php echo $promo ?>€</span>
                            <span><?php echo $ficheProduct['0']['price']; ?>€</span>
                        <?php } elseif ($ficheProduct['0']['discount'] = null || $ficheProduct['0']['discount'] == 0) { ?>
                            <span><?php echo $ficheProduct['0']['price']; ?>€</span>
                        <?php } ?>
                    </div>
                    <p class="lead"><?php echo $ficheProduct['0']['description']; ?> </p>
                    <div class="d-flex">
                        <input class="form-control text-center me-3" id="inputQuantity" type="num" value="1" style="max-width: 3rem" />
                        <button class="btn btn-outline-dark flex-shrink-0" type="button">
                            <i class="bi-cart-fill me-1"></i>
                            Ajouter au panier
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Related items section-->
    <section class="py-5 bg-light">
        <div class="container px-4 px-lg-5 mt-5">
            <h2 class="fw-bolder mb-4">Related products</h2>
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">

                <?php foreach (array_slice($product, 0, 4) as $i) {
                    if ($id_produit != $i['id_produit']) {
                ?>

                        <div class="col mb-5">
                            <div class="card h-100">

                                <!-- SI MON PRODUIT A UNE REDUCTION-->
                                <?php if ($i['discount'] != 0) {
                                ?>

                                    <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem"><?php echo $i['discount']; ?>%</div>

                                <?php } ?>

                                <!-- IMAGE DU PRODUIT-->

                                <img class="card-img-top" style="height:180px ;" src="./backoffice/image/<?php echo $i['image_produit'] ?>" alt="..." />


                                <!-- DETAILS DU PRODUIT-->

                                <div class="card-body p-4">
                                    <div class="text-center">

                                        <!-- NOM DU PRODUIT-->

                                        <h5 class="fw-bolder"> <?php echo $i['title']; ?> </h5>

                                        <!-- PRIX DU PRODUIT-->
                                        <?php if ($i['discount'] != 0) {
                                            $promo = $i['price'] - ($i['price'] * ($i['discount'] / 100));
                                        ?>
                                            <span class="text-muted text-decoration-line-through"><?php echo $i['price']; ?>€</span>
                                            <?php echo $promo . '€'; ?>
                                        <?php } elseif ($i['discount'] = null || $i['discount'] == 0) {
                                            $promo = $i['price']; ?>

                                        <?php echo $promo . '€';
                                        } ?>

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


                <?php }
                } ?>
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