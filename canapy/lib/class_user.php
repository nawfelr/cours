<?php
class User
{
    private $db;
    public function __construct($db)
    {
        $this->db = $db;
    }

    public function register($firstname, $lastname, $email, $password)
    {
        $insertUserQuery = $this->db->prepare('INSERT INTO `user`( `firstname`, `lastname`, `email`, `password`) VALUES (:firstname,:lastname,:email,:password)');
        $insertUserQuery->bindParam(':firstname', $firstname);
        $insertUserQuery->bindParam(':lastname', $lastname);
        $insertUserQuery->bindParam(':email', $email);
        $insertUserQuery->bindParam(':password', $password);


        if ($insertUserQuery->execute()) {
            return true;
        } else {
            return false;
        }
    }


    public function login($email, $password)
    {
        $passwordCrypted = md5($password);
        $selectUser = $this->db->prepare("SELECT * FROM user WHERE `email` = :email AND  `password`= :passwordCrypted");
        $selectUser->bindParam(':email', $email);
        $selectUser->bindParam(':passwordCrypted', $passwordCrypted);



        if ($selectUser->execute()) {
            $tableUser = $selectUser->fetch(PDO::FETCH_ASSOC);
            print_r($tableUser);

            $nb_ligne = $selectUser->rowCount();
            echo $nb_ligne;
            if ($nb_ligne >= 1) {


                $_SESSION['id_user'] = $tableUser['id_user'];
                $_SESSION['firstname'] = $tableUser['firstname'];
                $_SESSION['lastname'] = $tableUser['lastname'];
                $_SESSION['email'] = $tableUser['email'];
                $_SESSION['power'] = $tableUser['power'];
                if ($_SESSION['power'] == 0) {
                    //Un utilisateur
                    header(('Location: ./index.php'));
                    // Redirigé vers index.php à la racine du projet 
                } elseif ($_SESSION['power'] == 1) {
                    // Un modérateur
                    header(('Location: ./index.php'));
                    // Redirigé vers index.php à la racine du projet 
                }
                return true;
            } else {
                echo 'Email OU Mot de passe incorrect';
                return false;
            }
        }
    }


    public function logOut()
    {
        session_start(); //Si on veut manipuler la SESSION, on doit l'appeler.
        session_unset(); // unset va vider la variable $_SESSION
        session_destroy(); // Va détruire la variable $_SESSION et du coup la session elle même
        // header('Location: ../index.php');
        header('Location: ./../index.php');
    }
}
