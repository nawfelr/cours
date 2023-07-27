// [ source: https://github.com/oc-courses/intro-javascript ]

/*
* EXERCICE 1: les objets
*
* Complétez le programme pour ajouter la définition de l'objet chien.
* TODO : ajoutez ici la définition de l'objet chien
*/

let chien ={
nom :"Medor",
race:"Berger Allemand",
taille:"75",
aboyer: function (){
    return "wouaf wouaf";
}  
}

console.log(chien.nom + " est un " + chien.race + " mesurant " + chien.taille + " cm");
console.log("Tiens, un chat ! " + chien.nom + " aboie : " + chien.aboyer());

// Le resultat doit être:
// Medor est un berger allemand mesuranr 75 cm
// Tiens, un chat ! Medor aboie : Wouaf ! Wouaf !




/*
* EXERCICE 2: les objets 
* Complétez le programme pour ajouter à l'objet aurora défini 
* une propriété nommée xp représentant son expérience. 
* Sa valeur initiale est de 0.
* L'expérience doit apparaître dans la description du personnage.
*/

// Ajoutez votre code ici

let aurora = {
    nom: "Aurora",
    xp: 0,
    pv: 150,
    force:25,

    decrire: function(){
        return this.nom+ " a " + this.pv +" points de vie " + this.force+" en force et "+ this.xp +" points d'expérience";
    }
}

// "Aurora a 150 points de vie, 25 en force et 0 points d'expérience"
console.log(aurora.decrire());

console.log("Aurora apprend une nouvelle compétence");
aurora.xp += 15;

// "Aurora a 150 points de vie, 25 en force et 15 points d'expérience"
console.log(aurora.decrire());




/* 
* EXERCICE 3: les objets
* Complétez le programme en ajoutant la définition de la classe Chien 
* afin d'obtenir le résultat d'exécution désiré.
* Les chiens mesurant plus de 50 cm aboient en faisant "Grrr ! Grrr !", 
* les autres font "Wouaf ! Wouaf !"
*/

// Ajoutez votre code ici

class Chien {
    constructor(arg1, arg2, arg3) {
        this.nom = arg1;
        this.race = arg2;
        this.taille= arg3;
    }

    aboyer() {
        if (this.taille > 50){
            return "Grrr ! Grrr !";
        }else {
            return "Wouaf ! Wouaf !"
        }
        
    }

    decrire(){
        return this.nom + " est un " + this.race + " mesurant " + this.taille+ " cm.";
    }
}

let crockdur = new Chien("Crockdur", "mâtin de Naples", 75);
// "Crockdur est un mâtin de Naples mesurant 75 cm"
console.log(crockdur.decrire());
// "Tiens, un chat ! Crockdur aboie : Grrr ! Grrr !"
console.log("Tiens, un chat ! " + crockdur.nom + " aboie : " + crockdur.aboyer());

let milou = new Chien("Milou", "fox-terrier", 26);
// "Milou est un fox-terrier mesurant 26 cm"
console.log(milou.decrire());
// "Tiens, un chat ! Milou aboie : Wouaf ! Wouaf !"
console.log("Tiens, un chat ! " + milou.nom + " aboie : " + milou.aboyer());




/* 
* EXERCICE 4: les objets
* Complétez ce programme y ajouter la gestion de l'inventaire des personnages. 
* Voici les améliorations à intégrer :
* L'inventaire d'un personnage se compose d'un nombre de pièces d'or et d'un nombre de clés.
* Tous les personnages possèdent initialement 10 pièces d'or et une clé.
* L'inventaire doit être affiché dans la description d'un joueur.
* Lorsqu'un personnage tue un adversaire, il récupère dans son propre inventaire le nombre 
* de pièces d'or et de clés de cet adversaire.
*/

// Ajoutez votre code ici

class Personnage {
    constructor(arg1, arg2, arg3) {
        this.nom = arg1;
        this.pv = arg2;
        this.force = arg3;
        this.xp = 0;
        this.po = 10;
        this.cle = 1;
    }

    decrire() {
        return this.nom + " a " + this.pv + " points de vie, "+  this.force +" en force et " + this.xp + " points d'expérience," + this.po + " pièces d'or et " + this.cle + " clé(s)";
    }

    attaquer(enemi) {
        enemi.pv = enemi.pv - this.force;
        
}
}



// "Aurora a 150 points de vie, 25 en force et 0 points d'expérience, 10 pièces d'or et 1 clé(s)"
let aurora = new Personnage("Aurora", 150, 25);

console.log(aurora.decrire());

let monstre = new Personnage("ZogZog", 20, 10);
monstre.attaquer(aurora);
aurora.attaquer(monstre); // Le monstre est tué

// "Aurora a 140 points de vie, 25 en force et 10 points d'expérience, 20 pièces d'or et 2 clé(s)"
console.log(aurora.decrire());




/*
* EXERCICE 5: les objets
*
* Ecrivez un programme qui crée un objet compte ayant les propriétés suivantes :
*
* Une propriété titulaire valant "Alex".
*
* Une propriété solde valant initialement 0.
*
* Une méthode crediter() ajoutant le montant passé en paramètre au solde du compte.
*
* Une méthode debiter() retirant le montant passé en paramètre du solde du compte.
*
* Une méthode decrire() renvoyant la description du compte.
*
* Utilisez cet objet pour afficher sa description, le créditer puis le débiter de
* montants saisis successivement par l'utilisateur,
* puis afficher de nouveau sa description.
*/

// Voici le résultat à obtenir pour un crédit de 200 puis un débit de 150.
// Titulaire: Alex, solde : 0 euros
// Titulaire : Alex, solde : 50 euros




/* 
* EXERCICE 6: les objets
* Reprenons le contexte des comptes en banque.
* Un compte bancaire sera modélisé par constructeur définie comme suit :
* Une propriété titulaire initialisée par le constructeur.
* Une propriété solde valant initialement 0.
* Une méthode crediter() ajoutant le montant passé en paramètre (éventuellement négatif) au solde du compte.
* Une méthode decrire() renvoyant la description du compte.
* Ecrivez un programme qui crée 3 comptes bancaires, l'un appartenant à Alex, le deuxième à CLovis et le troisième à Marco. 
* Stockez ces comptes dans un tableau.
* Ensuite, le programme crédite 1000 € et affiche la description de chacun des comptes.
*/


