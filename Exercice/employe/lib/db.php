<?php


$user = "root";
$pwd = "";
$db_name = "oo_entreprise";
$server = "localhost";

$name_server = basename($_SERVER['SERVER_NAME']);

// echo $name_server;
// $name_server = basename($_SERVER['SERVER_NAME']);

// echo $name_server;



try {
    $db = new PDO("mysql:host=$server;dbname=$db_name", $user, $pwd);
} catch (PDOException $e) {
    $error_msg = "<p style='color:red;'> " . $e->getMessage() . " </p>";
    if ($name_server == "localhost") {

        echo $error_msg;

        // echo "tu n'es pas connecté";
        // tenter de réessayer la connexion après un certain délai, par exemple
    }

    // print_r($_SERVER);

}
