<?php
/*
 Créez une classe Membre avec les propriétés pseudo et mots de passe, le pseudo doit être inférieur a 15 caractères er supérieur à 0 ET QUE CE SOIT UN STRING !!

 => Objectif : afficher le pseudo et le mdp



*/



class Membre
{

    //Propriété privée
    private $pseudo;
    private $mdp;



    public function setPseudo($arg)
    {
        if (is_string($arg) && (strlen($arg) > 0 && strlen($arg) < 15)) {
            $this->pseudo = $arg;
        }
    }
    public function getPseudo()
    {
        return $this->pseudo;
    }

    public function setMdp($arg)
    {
        $this->mdp = $arg;
    }

    public function getMdp()
    {
        return $this->mdp;
    }
}
// ------------------------------------------------------------------

$membre1 = new Membre;

$membre1->setPseudo('Marco');
$membre1->setMdp('Polo');

echo 'Pseudo : ' . $membre1->getPseudo() . '<br>';
echo 'Mot de passe : ' . $membre1->getMdp() . '<br>';
