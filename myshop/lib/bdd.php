<?php
$loginBDD = "root";
$passwordBDD = "";
$BDDName = "myshop";
$serverName = "localhost";

$BDD_connect = mysqli_connect($serverName, $loginBDD, $passwordBDD, $BDDName);
