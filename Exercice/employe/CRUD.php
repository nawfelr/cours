<?php

require_once('lib/class_crud.php');

$tableEmploye = new Crud($db);
// Assurez-vous de vérifier et de valider l'ID

// Appeler la méthode selectArticleById pour récupérer les détails de l'article par ID
$employe = $tableEmploye->selectAllEmploye();

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
                        <h1>Tableaux des employés</h1>
                    </div>
                </div>
                <div class="col-lg-7">

                </div>
            </div>
        </div>
    </div>
    <br><br><br>
    <div style="margin:auto; width:85%;">

        <table class="table" style="border:2px solid black;">
            <thead>
                <tr>
                    <th class="product-thumbnail">IdEmploye</th>
                    <th class="product-thumbnail">Prenom</th>
                    <th class="product-thumbnail">Nom</th>
                    <th class="product-thumbnail">sexe</th>
                    <th class="product-thumbnail">service</th>
                    <th class="product-thumbnail">dateEmbauche</th>
                    <th class="product-thumbnail">salaire</th>
                    <th class="product-thumbnail">IdSecteur</th>
                    <th class="product-thumbnail">Voir</th>
                    <th class="product-thumbnail">Modifier</th>
                    <th class="product-thumbnail">Supprimer</th>
                </tr>
            </thead>

            <?php foreach ($employe as $e) { ?>

                <tbody>
                    <tr>
                        <td> <?php echo $e['idEmploye']; ?> </td>
                        <td><?php echo $e['prenom']; ?></td>
                        <td><?php echo $e['nom']; ?></td>
                        <td><?php echo $e['sexe']; ?></td>
                        <td><?php echo $e['service']; ?></td>
                        <td><?php echo $e['dateEmbauche']; ?></td>
                        <td><?php echo $e['salaire']; ?></td>
                        <td><?php echo $e['idSecteur']; ?></td>
                        <td> <a href="fiche_employe.php?idEmploye=<?php echo $e['idEmploye']; ?>"><button type="button" class="btn btn-success">voir</button></a></td>
                        <td> <a href="modifier.php?idEmploye=<?php echo $e['idEmploye']; ?>"><button type="button" class="btn btn-warning">Modifier</button></a> </td>
                        <td> <a href="lib/delete.php?idEmploye=<?php echo $e['idEmploye']; ?>"><button type="button" class="btn btn-danger">Supprimer</button></a> </td>
                    </tr>
                <?php } ?>


                </tbody>
        </table>
    </div>
</body>

</html>