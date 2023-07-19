// [ source: https://github.com/oc-courses/intro-javascript ]

/*
* EXERCICE 1 - les fonctions
* Compléter le code suivant:
* Celui-ci doit renvoyer un message de bienvenue
*/

// TODO : faire saisir le prénom et le nom de l'utilisateur
// TODO : appeler direBonjour() avec les bons arguments et afficher son résultat

function direBonjour(prenom, nom) {
    let message = "Bonjour, " + prenom + " " + nom + " !";
    return message;
}

let nawfel = prompt ("Veuillez saisir votre prenom");
let famille= prompt("Veuillez saisir votre nom");


direBonjour(nawfel, famille);

console.log(direBonjour(nawfel, famille));

/*
* EXERCICE 2 - les fonctions
* Completer le code suivant
* Celui-ci doit renvoyer le carré d'un nombre
*/

function carre(x) {
    // TODO : compléter le code de la fonction
    let calcul = x*x;
    return calcul;
}

console.log(carre(0)); // Doit afficher 0
console.log(carre(2)); // Doit afficher 4
console.log(carre(5)); // Doit afficher 25




/* 
* EXERCICE 3 - les fonctions
* En supposant que la fonction JavaScript Math.min() n'existe pas, 
* complétez le programme pour que la fonction min() renvoie le plus petit des 
* deux nombres passés en paramètres.
*/

// Ajoutez votre code ici

function min(x,y){
    if (x<y){
        console.log(x);
    } else{
        console.log(y)
    }
}

console.log(min(4.5, 5)); // 4.5
console.log(min(19, 9));  // 9
console.log(min(1, 4));   // 1

/* 
* EXERCICE 4 - les fonctions
* Complétez le programme pour que la fonction calculer() gère les 4 opérations 
* mathématiques de base : addition, soustraction, multiplication et division.
*/
// Ajoutez votre code ici

function calculer(nb1,nb2) {

    let addition = nb1 + nb2;
    let soustraction = nb1-nb2;
    let multiplication = nb1 * nb2;
    let division = nb1/nb2;

    return addition, soustraction, multiplication, division;
}

let nombre1 = Number(prompt("Veuillez entre un nombre"));
let nombre2 = Number(prompt("Veuillez entre un nombre"));

calculer(nombre1,nombre2);




console.log(calculer(4, "+", 6));  // 10
console.log(calculer(4, "-", 6));  // -2
console.log(calculer(2, "*", 0));  // 0
console.log(calculer(12, "/", 0)); // Infinity