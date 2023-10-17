<?php
require('class_article.php');
$idOrders = $_GET['id_orders'];

$delCart = new Article($db);
$delCart->deleteArticle($idOrders);
header('Location: ../cart.php');
