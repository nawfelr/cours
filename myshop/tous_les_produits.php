<?php
require_once('./lib/bdd.php');
require_once('./lib/select_tous_produit.php');


?>






<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Tous les produits</title>
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
            <a class="navbar-brand" href="index.php">Accueil</a>
        </div>
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="./form_ajout_produit.php">Création Produit</a>
        </div>
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="./tous_les_produits.php">Tous les Produits</a>
        </div>

    </nav>
    <!-- Header-->
    <header class="bg-dark py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder">Tous mes produits</h1>
            </div>
        </div>
    </header>

    <section class="py-5">

        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <?php foreach ($produit as $p) { ?>



                    <div class="col mb-5">

                        <div class="card h-100">
                            <!-- Sale badge-->
                            <?php if ($p['reservation_text'] != null) { ?>
                                <div class="badge bg-dark text-white position-absolute"> Déja reserver</div>
                            <?php  } ?>
                            <br>

                            <!-- Product image-->
                            <img class="card-img-top" style="width:250px; height:200px" src="./image/<?php echo $p['image']; ?>" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder" style="text-transform: uppercase;"><?php echo $p['title']; ?></h5>

                                    <!-- Product price-->
                                    <p><?php echo $p['price']; ?> €</p>
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="./voir_produit.php?id_produit=<?php print_r($p['id_produit']); ?>">Voir produit</a></div>
                            </div>
                        </div>
                    </div>

                <?php } ?>
            </div>
        </div>
    </section>