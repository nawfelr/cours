<?php

$tableRevision = "SELECT * FROM `custom`";
$selectTableRevision = mysqli_query($bdd_connect, $tableRevision);
$revision = mysqli_fetch_all($selectTableRevision, MYSQLI_ASSOC);
print_r($revision);
