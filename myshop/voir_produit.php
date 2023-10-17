<?php
require_once('./lib/bdd.php');
require_once('./lib/select_product_by_id.php');
require_once('./lib/reservation.php');
$id_produit = $_GET['id_produit'];
// echo $id_produit;

?>



<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Fiche Produit</title>
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
                <h1 class="display-4 fw-bolder">Détail du produit</h1>
            </div>
        </div>
    </header>
    <!-- Product section-->
    <section class="py-5">
        <div class="container px-4 px-lg-5 my-5">
            <?php if ($produitId['0']['reservation_text'] != null) { ?>

                <div class="badge bg-dark text-white position-absolute"> Déja reserver</div>

            <?php } ?>
            <div class="row gx-4 gx-lg-5 align-items-center">
                <?php if ($produitId['0']['reservation_text'] != null) { ?>

                    <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="./image/indisponible.jpg" alt="..." /></div>
                    <div class="col-md-6">
                    <?php } else { ?>

                        <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="./image/<?php echo $produitId['0']['image']; ?>" alt="..." /></div>
                        <div class="col-md-6">

                        <?php } ?>

                        <h1 class="display-5 fw-bolder" style="text-transform: uppercase;"><?php echo $produitId['0']['title']; ?></h1>

                        <h2 class="display-5"><?php echo $produitId['0']['price']; ?> €</h2>
                        <div class="fs-5 mb-5">
                        </div>
                        <p class="lead"><?php echo $produitId['0']['description']; ?> </p>
                        <p class="lead">Ville : <?php echo $produitId['0']['city']; ?> </p>
                        <p class="lead">Code Postal : <?php echo $produitId['0']['postal_code']; ?> </p>

                        <form method="POST">

                            <div class="form-group">
                                <label for="reservation_text">Réserver</label> <br>
                                <textarea name="reservation_text" id="reservation_text" cols="50" rows="5"></textarea>
                            </div>
                            <br>
                            <?php if ($produitId['0']['reservation_text'] == null) { ?>

                                <div class="form-group">
                                    <input type="submit" class="form-control btn-dark" id="reservation_text" value='réserver'>
                                </div>
                            <?php } else { ?>
                                <div class="form-group">
                                    <p>Impossible de réserver ce produit. <a href="./tous_les_produits.php">Retourner à la page des produits</a></p>
                                </div>

                            <?php } ?>
                        </form>




                        </div>
                    </div>
            </div>
    </section>
    <!-- Related items section-->

</body>

</html>