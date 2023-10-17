<?php

class User
{

    public $lastname;
    public $firstname;
    public $email;
    public $age;
    // private $password;

    public function __construct($prenom, $nom, $email, $age)
    {
        $this->firstname = $prenom;
        $this->lastname = $nom;
        $this->email = $email;
        $this->age = $age;
    }

    public function presentation()
    {
        echo $this->firstname . " " . $this->lastname . " ";
    }

    public function verifAge()
    {
        if ($this->age >= 18) {
            echo "Utilisateur majeur";
        } else {
            echo
            "Utilisateur mineur";
        }
    }
}


// $user1 = new User('Damien', 'Armand', 'damien.dupont@gmail.com', '15');

// $user2 = new User('Boris', 'Aubrun', 'Boris.aubrun@gmail.com', '27');



// $user2->presentation();

// $user2->verifAge();
