<?php
require_once('lib/db.php');
require_once('lib/class_user.php');

if (!empty($_SESSION)) {
    header('Location:index.php');
}




if (!empty($_POST)) {

    if (!empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['confirmpassword'])) {

        if ($_POST['password'] == $_POST['confirmpassword'] && strlen($_POST['password']) >= 8) {
            extract($_POST);
            $cryptedpassword = md5($password);
            $user = new User($db);

            $q = $db->query("SELECT * FROM user WHERE email = '$email'");
            $nb_ligne = $q->rowCount();



            if ($nb_ligne == 0) {

                // Appeler la méthode insertArticle pour insérer les données
                if ($user->register($firstname, $lastname, $email, $cryptedpassword)) {
                    // L'insertion a réussi, vous pouvez rediriger ou afficher un message de succès
                    header("Location: login.php"); // Redirection vers une page de succès

                } else {
                    // L'insertion a échoué, afficher un message d'erreur
                    echo "L'insertion a échoué.";
                }
            } else {
                echo 'adresse mail déjà utilisée';
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Sixteen Clothing Products</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!--

TemplateMo 546 Sixteen Clothing

https://templatemo.com/tm-546-sixteen-clothing

-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="assets/css/owl.css">

</head>

<body>
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
        <?php include('components/nav.php'); ?>
    </header>

    <!-- Page Content -->
    <div class="page-heading products-heading header-text">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-content">
                        <h4>Rejoignez-nous</h4>
                        <h2>Inscription</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="formulaire" style="width:60%; margin: 20px auto;">

        <h3>Formulaire d'inscription</h3>
        <br>
        <div class="contact-form">
            <form id="contact" action="" method="post">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <fieldset>
                            <input name="firstname" type="text" class="form-control" id="firstname" placeholder="Prénom " required="">
                        </fieldset>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <fieldset>
                            <input name="lastname" type="text" class="form-control" id="lastname" placeholder="Nom de famille" required="">
                        </fieldset>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <fieldset>
                            <input name="email" type="email" class="form-control" id="email" placeholder="email" required="">
                        </fieldset>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <fieldset>
                            <input name="password" type="password" class="form-control" id="password" placeholder="mot de passe" required="">
                        </fieldset>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <fieldset>
                            <input name="confirmpassword" type="password" class="form-control" id="password" placeholder=" confirmation mot de passe" required="">
                        </fieldset>
                    </div>

                    <div class="col-lg-12">
                        <fieldset>
                            <button type="submit" id="form-submit" class="filled-button">S'inscrire</button>
                        </fieldset>
                    </div>
                </div>
            </form>
        </div>
    </div>





    </div>








    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="inner-content">
                        <p>Copyright &copy; 2020 Sixteen Clothing Co., Ltd.

                            - Design: <a rel="nofollow noopener" href="https://templatemo.com" target="_blank">TemplateMo</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/accordions.js"></script>


    <script language="text/Javascript">
        cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
        function clearField(t) { //declaring the array outside of the
            if (!cleared[t.id]) { // function makes it static and global
                cleared[t.id] = 1; // you could use true and false, but that's more typing
                t.value = ''; // with more chance of typos
                t.style.color = '#fff';
            }
        }
    </script>

</body>

</html>