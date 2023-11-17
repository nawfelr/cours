<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My dashboard</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <!-- Partie concernant l'image de connexion et le nom/prénom de la personne connectée -->
    <header>
        <div class="head">
            <div class="title">
                <h2>MY <span>DASHBOARD</span></h2>
            </div>


            <div class="login">

                <h4>Bonjour</h4>

                <img src="./assets/image/naruto.jpg" alt="">

            </div>
        </div>
    </header>
    <!-- Sidebar du dash board -->

    <div class="dash">

        <div class="sidebar">
            <nav>
                <ul>
                    <li> Gestion des utilisateurs </li>
                    <li><a href="">Modifier utilsateur</a></li>
                    <li><a href="">Supprimer utilisateur</a></li>
                    <li class="sous-menu"> Gestion des voyages
                        <ul class="niveau2">
                            <li><a href="">Ajouter un voyage</a> </li>
                            <li><a href="">Modifier un voyage</a></li>
                            <li><a href="">Supprimer un voyage</a></li>
                        </ul>

                    </li>

                </ul>
            </nav>
        </div>

        <div class="commande">
            <div class="table">
                <h3>Mes dernières commandes</h3>
                <table>
                    <tr>
                        <th>Utilisateur</th>
                        <th>Destination</th>
                        <th>Prix</th>
                        <th>Modifier</th>
                        <th>Supprimer</th>
                    </tr>
                    <tr>
                        <td>tables@mail.com</td>
                        <td>Dubai</td>
                        <td>150 €</td>
                        <td><a href="#"><i class="fa-solid fa-pencil" style="color: #ffffff;"></i></a></td>
                        <td> <a href="#"><i class="fa-solid fa-trash" style="color: #ebebeb;"></i></a> </td>
                    </tr>
                    <tr>
                        <td>developer@mail.com</td>
                        <td>Paris</td>
                        <td>300 €</td>
                        <td><a href="#"><i class="fa-solid fa-pencil" style="color: #ffffff;"></i></a></td>
                        <td> <a href="#"><i class="fa-solid fa-trash" style="color: #ebebeb;"></i></a> </td>
                    </tr>
                </table>

            </div>
        </div>

    </div>
</body>

</html>