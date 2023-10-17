<?php

// Class User


// Enregistrer les données de l'utilisateur dans un fichier json à l'aide d'une fonction public saveUser()


class User
{

    public $lastname;
    public $firstname;
    public $email;

    public function __construct($prenom, $nom, $email)
    {
        $this->firstname = $prenom;
        $this->lastname = $nom;
        $this->email = $email;
    }
    public function infoUser()
    {
        echo "$this->firstname $this->lastname $this->email ";
    }

    public function saveUser()
    {
        $table[0] = array(
            'firstname' => $this->firstname,
            'lastname' => $this->lastname,
            'email' => $this->email,
        );


        $js = json_encode($table, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
        $tablej = fopen("json/table.json", "a+");
        fwrite($tablej, $js);
        fclose($tablej);
    }
}

// ------------FIN DE LA CLASS

// DEBUT DE LA CONDITION

if (!empty($_POST)) {
    if (!empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['email'])) {


        extract($_POST);


        $user = new User($firstname, $lastname, $email);
        $user->saveUser();
        $user->infoUser();
    }
}


?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST">

        <label for="">Prénom</label>
        <input type="text" name="firstname">

        <label for="">Nom</label>
        <input type="text" name="lastname">

        <label for="">Email</label>
        <input type="text" name="email">

        <input type="submit" value="inscrire">



    </form>
</body>

</html>