<?php


class Etudiant
{

    //Propriété privée
    private $prenom;

    //Propriété publique

    public function __construct($arg)
    { // __construct : méthode appelée automatiquement lors d'une instanciation de la class ('new'). On ne peut pas déclarer 2 constructeur en php.
        echo "Instanciation, nous avons reçu l'information suivante: $arg";
        $this->setPrenom($arg);
    }
    public function setPrenom($arg)
    {
        $this->prenom = $arg;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }
}

$etudiant1 = new Etudiant('Jeremie'); // __construct est appelée automatiquement, nou savons mis un argument après le nom de la class qui attérit directement dans le constructeur.
echo '<br> Prenom : ' . $etudiant1->getPrenom();
// __construct sera équivalent du init avec session_start, connexion à la bdd, autoload, etc
//__construct c'est une méthode magique 