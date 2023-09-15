<?php
session_start(); //Si on veut manipuler la SESSION, on doit l'appeler.
session_unset(); // unset va vider la variable $_SESSION
session_destroy(); // Va détruire la variable $_SESSION et du coup la session elle même
// header('Location: ../index.php');
header('Location: ./../index.php');
