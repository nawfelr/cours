// commantaire sur ligne

/*

Ici, je fais un commentaire sur plusieurs lignes  

*/

// Etape 1 : Déclaer une variable en JS

// var prenom;

// étape 2 : affecter une valeur à une variable

// prenom="Mahmoud";

// var prenom=Mila;

// étape 3 : Une instruction se termine toujours par un point virgule, aussi il est possible d'écrire plusieurs instructions sur une seule ligne

// Instr_1

// instr_2; instr_3

// étape 4 : affiche une boite de dialoque (2 façons)

// alert ("super tu est arrivé sur mon site !")

// window.alert ("Super, tu est arrivé sur mon site !");

// étape 5 : Afficher dans la console (ici, la valeur de ma variable prenom)

// console.log (prenom);

// etape 6 : afficher dans la page web

// document.write("A la pause Bachir il dort")

// étape 7 : Demander à l'utilisateur une valeur (2 façons)

// window.prompt("Question: On est quel jour ?","jour de la semaine");

// prompt("Question: On est quel jour ?","jour de la semaine")

// et pour manipuler cette valeur je n'oublie pas de la stocker

// var jour=prompt("Question: On est quel jour ?","jour de la semaine");

// console.log(jour);

// étape 8 : attention le JS est ensible à la case ('case sensitive)

// mavariable =/= maVariable =/= ma_variable
//                camel case     snake case

// étape 9 : Une variable ne peut pas commencer par un chiffre, ne doit contenir que des caractéres alphanumériques et ne peut pas être un mot réservé (var, for...des éléments natifs du JS)

// étape 10 : Une variable peut être déclarée de facon explicite : 

// façon explicite
// var fruit;
// fruit = "fraise";

// ou implicite :
// var fruit_2 = "poire";


/*
~~~~~~~~~~~~~ LES TYPES DE VARIABLES ~~~~~~~~~~~~~~~~
*/

// 1. Chaines de caractéres (string)

var vacances = "2023";

var destination = "Australie";

// console.log (vacances,destination)


// 2. Un nombre entier (integer ou int)

var annee = 2023;
// console.log(annee);

// 3. Un dombre décimal (float)

var nombre_a_virgule = -5.32;
// console.log (nombre_a_virgule);

// 4. Un booléen (boolean = VRAI/FAUX = TRUE/FALSE)

var unBouleen = false;

// 5. Les Constantes

/* 
La declaration const permet de créer une constante accessible uniquement en lecture.
Contrairement à une variable sa valeur ne peut plus être modifé par réaffectation plus bas dans le code.
Une constante ne peut pa sêtre déclarer à nouveau dans le même script.
*/

// Par convention  les constantes sont en majuscule

const PAYS = "France"; // string
const AN = '2020'; // string
const BIRTH = 2020; // nombre/ in / integer

// 6. le typeof permet de connaitre le titre de ma variable

console.log(vacances);
console.log(typeof vacances);
console.log(typeof annee);

// En JS les variables sont auto-typées
// On peut convertir une variable de type NUMBER en STRING et aussi STRING en NUMBER  avec les fonctions natives de JS

// la fonction parseInt() renvoie un entier à partir d'une chaine de caractéres

var unChiffre = "12";
console.log(unChiffre)
console.log(typeof unChiffre);

// STRING => Numbre

unChiffre = parseInt(unChiffre);
console.log(unChiffre)
console.log(typeof unChiffre)

//  je ré-affecte une valeur

unChiffre = '12.22'
console.log(unChiffre)
console.log(typeof unChiffre)

// STRING => FLOAT
unChiffre = parseFloat(unChiffre);
console.log(unChiffre);
console.log(typeof unChiffre);

// NUMBER => STRING

var nb_en_lettres = 258;
console.log(nb_en_lettres);
console.log(typeof nb_en_lettres);


var nb_en_lettres = nb_en_lettres.toString();
console.log(nb_en_lettres);
console.log(typeof nb_en_lettres);


