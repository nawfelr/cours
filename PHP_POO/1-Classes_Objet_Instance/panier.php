<?php
// POO = programmation orientée objet

// Une classe permet de produire plusieurs objets. Par convention, une classe sera nommée avec la première lettre en MAJUSCULE

class Panier
{
    //Propriété publique 
    public $nbProduit; // Cette propriétré stockera le nombre de produit dans le panier 

    // Méthode publique 
    public function ajouterArticle()
    {
        //traitements
        return "L'article à bien été ajouté"; // Cette méthode renvoie un message de confirmation
    }
    // Méthode protégée (accessible uniquement dans la classe et ses classes dérivées)
    protected function retirerArticle()
    {
        //traitements
        return "L'article à bien été rétiré !"; // Cette méthode renvoie un message de confirmation
    }
    // Méthode privée (Accessible uniquement dans la classe)
    private function affichageArticle()
    {
        //traitements
        return "Voici les articles !"; // Cette méthode renvoie un message de confirmation
    }
}



// ------------------------------------------------------------------------------------------

$panier1 = new Panier; // new Panier <=> Instanciation (Permet de déployer l'objet issue de la classe (ici,Panier ) permet de passer d'une classe à l'objet)
//$panier1 représente l'objet issue de la class  
var_dump($panier1); // var_dump affiche des informations sur l'objet, y compris son type, son nom de classe et sa référence
$panier1->nbProduit = 5; // On assigne la valeur 5 à la propriété publique $nbProduit de l'objet $panier1

echo '<br> Panier 1 : ' . $panier1->nbProduit . ' produits <br>'; // On affiche ma propriété publique $nbProduit de l'objet $panier1


echo '<br> Panier 1 : ' . $panier1->ajouterArticle() . ' produits <br> <br>'; // On appelle la méthode publique ajouterArticle() de l'objet $panier1 et afficher son résultat

// echo '<br> Panier 1 : ' . $panier1->retirerArticle() . ' produits <br>';  On tente d'appeler la methode protéger retirerArticle(), ce qui génère une erreur 

// echo '<br> Panier 1 : ' . $panier1->affichageArticle() . ' produits <br>'; // On tente d'appeler la méthode privée affichageArticle(), ce qui génére une erreur


$panier2 = new Panier; // Création d'un nouvel objet $panier2 de la class Panier

var_dump($panier2);
echo '<br>';

$panier2->nbProduit = 10; // On assigne la valeur 1 à la propriété publique $nbProduit de l'objet $panier2

echo '<br> Panier 2 : ' . $panier2->nbProduit . ' produits <br>';/// On affiche ma propriété publique $nbProduit de l'objet $panier2