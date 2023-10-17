<?php
$loginBDD = "root";
$passwordBDD = "";
$BDDName = "myshop";
$serverName = "localhost";


try {
    $db = new PDO("mysql:host=$serverName;dbname=$BDDName", $loginBDD, $passwordBDD);
} catch (PDOException $e) {
    $error_msg = "<p style='color:red;'> " . $e->getMessage() . " </p>";
    if ($name_server == "localhost") {

        echo $error_msg;
    }
}
