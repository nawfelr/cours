<?php
require('class_article.php');
$id_article = $_GET['id_article'];
$id_user = $_SESSION['id_user'];
$addCart = new Article($db);
$addCart->addCart($id_user, $id_article);
header('Location: ../shop.php');
