<?php

require_once('lib/class_crud.php');
$idEmploye = $_GET['idEmploye'];
$EmployeById = new Crud($db);
// Assurez-vous de vérifier et de valider l'ID

// Appeler la méthode selectArticleById pour récupérer les détails de l'article par ID
$employeById = $EmployeById->selectOneEmploye($idEmploye);

print_r($employeById);


?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD employés</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="css/tiny-slider.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <title>Furni Free Bootstrap 5 Template for Furniture and Interior Design Websites by Untree.co </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>

<body>


    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="CRUD.php">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="ajout.php">Embaucher un employé</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <div class="hero">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-5">
                    <div class="intro-excerpt">
                        <h1>Fiche employés</h1>
                    </div>
                </div>
                <div class="col-lg-7">

                </div>
            </div>
        </div>
    </div>

    <br>
    <br>

    <div class="card" style="width: 18rem; margin:auto;">
        <img src="image/Capture d’écran 2023-09-25 100913.png" class="card-img-top" alt="...">
        <div class="card-body">
            <p class="card-text">Prénom : <?php echo $employeById['prenom']; ?> </p>
            <p class="card-text">Nom : <?php echo $employeById['nom']; ?> </p>
            <p class="card-text">Sexe : <?php echo $employeById['sexe']; ?> </p>
            <p class="card-text">Service : <?php echo $employeById['service']; ?> </p>
            <p class="card-text">Date d'embauche : <?php echo $employeById['dateEmbauche']; ?> </p>
            <p class="card-text">Salaire : <?php echo $employeById['salaire']; ?> </p>
            <p class="card-text">Secteur : <?php echo $employeById['idSecteur']; ?> </p>
        </div>
    </div>
    <br>
</body>

</html>