<?php
$sqlSelectdd = "SELECT * FROM `category` c WHERE EXISTS ( SELECT 1 FROM `product` p WHERE p.`id_category` = c.`id_category` ) ";
$tableSelectdd = mysqli_query($db_connect, $sqlSelectdd);
$categorydd = mysqli_fetch_all($tableSelectdd, MYSQLI_ASSOC);
print_r($categorydd);
