<?php
require_once('class_crud.php');
$idEmploye = $_GET['idEmploye'];
$virer = new Crud($db);

$virer->deleteEmploye($idEmploye);
