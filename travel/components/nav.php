<?php

$current_page = basename($_SERVER['PHP_SELF']);


?>

<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="index.php">
            <h2>My <em>Travel</em></h2>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="<?php if ($current_page == "index.php") {

                                echo "nav-item active";
                            } ?>">
                    <a class="nav-link" href="index.php">Accueil
                    </a>
                </li>

                <li class="<?php if ($current_page == "products.php") {

                                echo "nav-item active";
                            } ?>">
                    <a class="nav-link" href="products.php">Nos produits</a>
                </li>

                <li class="<?php if ($current_page == "about.php") {

                                echo "nav-item active";
                            } ?>">
                    <a class="nav-link" href="about.php">À propos de nous</a>
                </li>

                <li class="<?php if ($current_page == "contact.php") {

                                echo "nav-item active";
                            } ?>">
                    <a class="nav-link" href="contact.php">Nous contacter</a>
                </li>

                <?php if (empty($_SESSION)) { ?>

                    <li class="<?php if ($current_page == "login.php") {

                                    echo "nav-item active";
                                } ?>">
                        <a class="nav-link" href="login.php">Se connecter</a>
                    </li>
                <?php } ?>

                <?php if (empty($_SESSION)) { ?>

                    <li class="<?php if ($current_page == "register.php") {

                                    echo "nav-item active";
                                } ?>">
                        <a class="nav-link" href="register.php">S'inscrire</a>
                    </li>
                <?php } ?>
                <?php if (!empty($_SESSION)) { ?>

                    <li class="<?php if ($current_page == "create.php") {

                                    echo "nav-item active";
                                } ?>">
                        <a class="nav-link" href="create.php">Ajouter un voyage</a>
                    </li>
                <?php } ?>

                <?php if (!empty($_SESSION)) { ?>

                    <li class="<?php if ($current_page == "deconnexion.php") {

                                    echo "nav-item active";
                                } ?>">
                        <a class="nav-link" href="lib/deconnexion.php">deconnexion</a>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</nav>