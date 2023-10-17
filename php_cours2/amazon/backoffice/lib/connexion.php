<?php


if (!empty($_POST)) {
    extract($_POST);
    // l'extract permet de transformer $_Post['email'] en $email
    if (!empty($email) && !empty($password)) {

        $passwordCrypted = md5($password);
        $sqlSelectUser = "SELECT * FROM user WHERE email = '$email' AND password = '$passwordCrypted'";

        $tableSelectUser = mysqli_query($db_connect, $sqlSelectUser);
        $user = mysqli_fetch_assoc($tableSelectUser);
        print_r($user);
        if (mysqli_num_rows($tableSelectUser) == 1) {
            session_start();
            $_SESSION['id_user'] = $user['id_user'];
            $_SESSION['firstname'] = $user['firstname'];
            $_SESSION['lastname'] = $user['lastname'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['date_register'] = $user['date_register'];
            $_SESSION['user_statut'] = $user['user_statut'];
            $_SESSION['image'] = $user['image'];

            if ($user['user_statut'] == 0) {
                //Un utilisateur
                header(('Location: ../index.php'));
                // Redirigé vers index.php à la racine du projet 
            } elseif ($user['user_statut'] == 1) {
                // Un modérateur
                header(('Location: ../index.php'));
                // Redirigé vers index.php à la racine du projet 
            } elseif ($user['user_statut'] == 2) {
                //  Un administrateur
                header(('Location: ./index.php'));
                // Redirigé vers index.php dans le backoffice ( le dashboard )
            }
        } else {
            echo 'Email OU Mot de passe incorrect';
            $imageError = "style='background-image:url(https://images.pexels.com/photos/1851164/pexels-photo-1851164.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1)';";
            $textError = 'Email OU Mot de passe incorrect';
        }
    }
}
