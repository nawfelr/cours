<?php
require('./class_user.php');

$deconnexion = new User($db);
$deconnexion->logOut();
