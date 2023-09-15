<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Shop Homepage - Start Bootstrap Template</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body>


    <?php


    $fileColor = fopen('log/logColor.txt', 'w');
    $logColor = $_POST['color'];
    fwrite($fileColor, $logColor);
    fclose($fileColor);
    // echo $logColor;

    $section = file_get_contents('./log/logColor.txt', true);




    ?>

    <?php

    $fileTitreProduit = fopen('log/logSite.txt', 'w');
    $logSite = $_POST['titreSite'];
    fwrite($fileTitreSite, $logSite);
    fclose($fileTitreSite);


    $fileTitreHeader = fopen('log/logHeader.txt', 'w');
    $logHeader = $_POST['titreHeader'];
    fwrite($fileTitreHeader, $logHeader);
    fclose($fileTitreHeader);


    $fileTitreSous = fopen('log/logSous.txt', 'w');
    $logSous = $_POST['titreSous'];
    fwrite($fileTitreSous, $logSous);
    fclose($fileTitreSous);

    $tableTitle = array(
        
        'titreProduit' => $_POST['titreSite'],
        'texteProduit' => $_POST['titreHeader'],
        'prix' => $_POST['titreSous'],
        "image" => $_FILES['image']['name']
    );



    // print_r($tableTitle);

    $myJSON = json_encode($tableTitle);




    $tableTitle = fopen('Json/table.json', 'w');
    fwrite($tableTitle, $myJSON);
    fclose($tableTitle);

    $table_json = file_get_contents('Json/table.json');
    $decoded_json = json_decode($table_json, true);

    // echo "<br>";

    // print_r($table_json);


    // echo $decoded_json->titreSite;

    // echo $decoded_json->titreHeader;

    // echo $decoded_json->titreSous;




    ?>



    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="#!"><?php echo $decoded_json['titreSite']; ?></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Home</a></li>
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
    <!-- Header-->
    <header class="bg-dark py-5" style="background-color:<?php echo $section ?>!important">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder"><?php echo $decoded_json['titreHeader']; ?></h1>
                <p class="lead fw-normal text-white-50 mb-0"><?php echo $decoded_json['titreSous']; ?></p>
            </div>
        </div>
    </header>
    <!-- Section-->
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">


            <?php

            echo "Formulaire TEST"

            ?>
            <!-- Formulaire -->
            <form method="POST">
                <label for="email"> Email: </label>
                <input type="mail" id="email" name="email" placeholder="insérer votre email @">
                <br>
                <label for="firstname"> Prénom</label>
                <input type="text" id="firstname" name="firstname" placeholder="votre prénom">
                <br>
                <label for="lastname"> Nom</label>
                <input type="text" id="lastname" name="lastname" placeholder="Votre nom">
                <br>
                <input type="submit" id="validate" name="validate" value="je m'inscris">



            </form>
            <!-- Formulaire -->
            <?php
            echo "<pre>";
            print_r($_FILES);
            echo "</pre>";

            $uploadImage = "assets/images/";
            $uploadFile = $uploadImage . $_FILES["image"]['name'];
            //           "assets/images/téléchargement(1).jpg"


            if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadFile)) {
                echo "Image Niquel !";
            } else {
                echo "!!! Image hacker !!!";
            }







            // echo $_POST['email'];

            // Si mon prénom fait moins de 5 caractères afficher un message d"erreur

            // if (!empty($_POST)) {
            //     if (strlen($_POST['firstname']) < 5) {
            //         echo "<br>" . $_POST['firstname'] . " sah tes darons ils abusent c'est pas un vrai blase ça, mets plus de lettres";
            //     } else {
            //         $file = fopen('log/log.txt', 'a+');
            //         $log = "L'utilisateur : " . $_POST['email'] . " à réussi à s'inscrire le " . date('d/m/Y H:i:s');
            //         fwrite($file, $log . PHP_EOL);
            //         fclose($file);
            //     }
            // }






            ?>



            <!-- Formulaire couleur -->

            <form enctype="multipart/form-data" method="POST">

                <label for="color"> Couleur</label>
                <input type="color" id="color" name="color" value="color">
                <br>

                <label for="titreSite"> Modifier le titre du site</label>
                <input type="text" id="titreSite" name="titreSite" placeholder="Veuillez entrez un nouveau titre">
                <br>
                <label for="titreHeader"> Modifier le titre du header</label>
                <input type="text" id="titreHeader" name="titreHeader" placeholder="Veuillez entrez un nouveau titre du header">
                <br>
                <label for="titreSous"> Modifier le sous-titre</label>
                <input type="text" id="titreSous" name="titreSous" placeholder="Veuillez entrez un nouveau sous-titre">
                <br>
                <input type="submit" id="validation" name="validation" value="je valide">

                <label for="image">Image du produit</label>
                <input type="file" id="image" name="image">

                <input type="submit" value="Mettre à jour">

            </form>
            <!-- Formulaire couleur fin -->

            <!-- CHEMIN PHP POUR LES TITRES -->





            <!-- Formulaire titre fin -->

            <?php

            echo $decoded_json['image'];
            ?>




            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">

                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="assets/images/<?php echo $decoded_json['image']; ?>" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Popular Item</h5>
                                <!-- Product reviews-->
                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                </div>
                                <!-- Product price-->
                                $40.00
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                        </div>
                    </div>
                </div>
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