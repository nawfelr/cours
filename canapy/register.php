<?php
require_once('lib/db.php');
require_once('lib/class_user.php');

if (!empty($_SESSION)) {
    header('Location:index.php');
}




if (!empty($_POST)) {

    if (!empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['confirmPassword'])) {

        if ($_POST['password'] == $_POST['confirmPassword'] && strlen($_POST['password']) >= 8) {
            extract($_POST);
            $cryptedPassword = md5($password);
            $user = new User($db);

            $q = $db->query("SELECT * FROM user WHERE email = '$email'");
            $nb_ligne = $q->rowCount();



            if ($nb_ligne == 0) {

                // Appeler la méthode insertArticle pour insérer les données
                if ($user->register($firstname, $lastname, $email, $cryptedPassword)) {
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

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Untree.co">
    <link rel="shortcut icon" href="favicon.png">

    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap4" />

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="css/tiny-slider.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <title>Furni Free Bootstrap 5 Template for Furniture and Interior Design Websites by Untree.co </title>
</head>

<body>

    <!-- Start Header/Navigation -->
    <?php include('component/nav.php'); ?>
    <!-- End Header/Navigation -->

    <!-- Start Hero Section -->
    <div class="hero">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-5">
                    <div class="intro-excerpt">
                        <h1>Créer son compte</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Hero Section -->


    <!-- Start Contact Form -->
    <div class="untree_co-section">
        <div class="container">

            <div class="block">
                <div class="row justify-content-center">


                    <div class="col-md-8 col-lg-8 pb-4">



                        <form method="post" enctype="multipart/form-data">
                            <div class="row">


                                <div class="col-6">
                                    <div class="form-group">
                                        <label class="text-black" for="lname">Prénom</label>
                                        <input type="text" step="0.01" class="form-control" id="lname" name="firstname">
                                    </div>
                                </div>


                                <div class="col-6">
                                    <div class="form-group">
                                        <label class="text-black" for="fname">Nom</label>
                                        <input type="text" class="form-control" id="fname" name="lastname">
                                    </div>
                                </div>



                                <div class="col-6">
                                    <div class="form-group">
                                        <label class="text-black" for="lname">email</label>
                                        <input type="text" step="0.01" class="form-control" id="lname" name="email">
                                    </div>
                                </div>

                                <div class="col-6">
                                    <div class="form-group">
                                        <label class="text-black" for="lname">mot de passe</label>
                                        <input type="password" step="0.01" class="form-control" id="lname" name="password">
                                    </div>
                                </div>

                                <div class="col-6">
                                    <div class="form-group">
                                        <label class="text-black" for="lname">Confirmation mot de passe</label>
                                        <input type="password" step="0.01" class="form-control" id="lname" name="confirmPassword">
                                    </div>
                                </div>

                                <!-- <div class="col-6">
                                    <div class="form-group">
                                        <label class="text-black" for="lname">statut du user</label>
                                        <input type="text" step="0.01" class="form-control" id="lname" name="power">
                                    </div>
                                </div> -->

                            </div>

                    </div>


                    <div class="form-group mb-5">

                    </div>

                    <input type="submit" class="btn btn-primary-hover-outline" value="Création du compte">
                    </form>

                </div>

            </div>

        </div>

    </div>


    </div>
    </div>

    <!-- End Contact Form -->



    <!-- Start Footer Section -->
    <footer class="footer-section">
        <div class="container relative">

            <div class="sofa-img">
                <img src="images/sofa.png" alt="Image" class="img-fluid">
            </div>

            <div class="row">
                <div class="col-lg-8">
                    <div class="subscription-form">
                        <h3 class="d-flex align-items-center"><span class="me-1"><img src="images/envelope-outline.svg" alt="Image" class="img-fluid"></span><span>Subscribe to Newsletter</span></h3>

                        <form action="#" class="row g-3">
                            <div class="col-auto">
                                <input type="text" class="form-control" placeholder="Enter your name">
                            </div>
                            <div class="col-auto">
                                <input type="email" class="form-control" placeholder="Enter your email">
                            </div>
                            <div class="col-auto">
                                <button class="btn btn-primary">
                                    <span class="fa fa-paper-plane"></span>
                                </button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>

            <div class="row g-5 mb-5">
                <div class="col-lg-4">
                    <div class="mb-4 footer-logo-wrap"><a href="#" class="footer-logo">Furni<span>.</span></a></div>
                    <p class="mb-4">Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique. Pellentesque habitant</p>

                    <ul class="list-unstyled custom-social">
                        <li><a href="#"><span class="fa fa-brands fa-facebook-f"></span></a></li>
                        <li><a href="#"><span class="fa fa-brands fa-twitter"></span></a></li>
                        <li><a href="#"><span class="fa fa-brands fa-instagram"></span></a></li>
                        <li><a href="#"><span class="fa fa-brands fa-linkedin"></span></a></li>
                    </ul>
                </div>

                <div class="col-lg-8">
                    <div class="row links-wrap">
                        <div class="col-6 col-sm-6 col-md-3">
                            <ul class="list-unstyled">
                                <li><a href="#">About us</a></li>
                                <li><a href="#">Services</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Contact us</a></li>
                            </ul>
                        </div>

                        <div class="col-6 col-sm-6 col-md-3">
                            <ul class="list-unstyled">
                                <li><a href="#">Support</a></li>
                                <li><a href="#">Knowledge base</a></li>
                                <li><a href="#">Live chat</a></li>
                            </ul>
                        </div>

                        <div class="col-6 col-sm-6 col-md-3">
                            <ul class="list-unstyled">
                                <li><a href="#">Jobs</a></li>
                                <li><a href="#">Our team</a></li>
                                <li><a href="#">Leadership</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                            </ul>
                        </div>

                        <div class="col-6 col-sm-6 col-md-3">
                            <ul class="list-unstyled">
                                <li><a href="#">Nordic Chair</a></li>
                                <li><a href="#">Kruzo Aero</a></li>
                                <li><a href="#">Ergonomic Chair</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>

            <div class="border-top copyright">
                <div class="row pt-4">
                    <div class="col-lg-6">
                        <p class="mb-2 text-center text-lg-start">Copyright &copy;<script>
                                document.write(new Date().getFullYear());
                            </script>. All Rights Reserved. &mdash; Designed with love by <a href="https://untree.co">Untree.co</a> Distributed By <a hreff="https://themewagon.com">ThemeWagon</a> <!-- License information: https://untree.co/license/ -->
                        </p>
                    </div>

                    <div class="col-lg-6 text-center text-lg-end">
                        <ul class="list-unstyled d-inline-flex ms-auto">
                            <li class="me-4"><a href="#">Terms &amp; Conditions</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>

                </div>
            </div>

        </div>
    </footer>
    <!-- End Footer Section -->


    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/tiny-slider.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>