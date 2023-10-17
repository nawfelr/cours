<?php

require_once('lib/class_crud.php');
if (!empty($_POST)) {

    if (!empty($_POST['prenom']) && !empty($_POST['nom']) && !empty($_POST['sexe']) && !empty($_POST['service']) && !empty($_POST['dateEmbauche']) && !empty($_POST['salaire']) && !empty($_POST['idSecteur'])) {

        extract($_POST);
        print_r($_POST);

        $ajoutEmploye = new Crud($db);

        if ($ajoutEmploye->insertEmploye($prenom, $nom, $sexe, $service, $dateEmbauche, $salaire, $idSecteur)) {
            header('location:CRUD.php');
        } else {
            echo "Vous n'avez embaucher personne ";
        }
    }
}



// print_r($employe);


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
                        <h1>Embaucher employés</h1>
                    </div>
                </div>
                <div class="col-lg-7">

                </div>
            </div>
        </div>
    </div>


    <div style="width:50%; margin:auto;margin-top:50px;">

        <form method="POST">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Prenom</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="prenom">

            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">nom</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="nom">
            </div>

            <div class="mb-3">
                <input type="radio" id="contactChoice1" name="sexe" value="m" />
                <label for="contactChoice1">homme</label>

                <input type="radio" id="contactChoice2" name="sexe" value="f" />
                <label for="contactChoice2">femme</label>
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">service</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="service">
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">date d'embauche</label>
                <input type="date" class="form-control" id="exampleInputPassword1" name="dateEmbauche">
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Salaire</label>
                <input type="number" class="form-control" id="exampleInputPassword1" name="salaire">
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Id du secteur</label>
                <input type="number" class="form-control" id="exampleInputPassword1" name="idSecteur">
            </div>

            <input type="submit" class="btn btn-primary" value="envoyer">
        </form>
    </div>


    <br>
    <br>
    <!-- $deleteEmploye->bindParam(':prenom', $prenom);
    $deleteEmploye->bindParam(':nom', $nom);
    $deleteEmploye->bindParam(':sexe', $sexe);
    $deleteEmploye->bindParam(':service', $service);
    $deleteEmploye->bindParam(':dateEmbauche', $dateEmbauche);
    $deleteEmploye->bindParam(':salaire', $salaire);
    $deleteEmploye->bindParam(':idSecteur', $idSecteur); -->

</body>

</html>