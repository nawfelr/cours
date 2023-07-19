// ======= II - LES VARIABLES =========


// documentation du language par excellence, vous avez tout dessus
// https://developer.mozilla.org/fr/docs/Web/JavaScript


// A - DEFINITION

// Les variables sont des conteneurs dans lesquels on peut stocker des valeurs. 
// Pour commencer, il faut déclarer une variable avec le mot-clé var en le faisant suivre de son nom :   

let maVariable;

/* Note 1: Un point-virgule en fin de ligne indique là où se termine l'instruction ; 
*          Pas impératif mais une bonne pratique.  
*
*  Note 2: Vous pouvez utiliser (quasiment) n'importe quel nom pour nommer une variable, 
*          Quelques restrictions (mots réservé aux languages): 
*          https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Mots_r%C3%A9serv%C3%A9s 
*
*  Note 3: JavaScript est sensible à la casse — maVariable est une variable différente de mavariable. 
*
*  Note 4: La bonne pratique pour le nommage des variables est la forme "camelCase"
*         - pour le premier mot, première lettre en minuscule, 
*         - pour tous les mots qui suivront, première lettre en MAJUSCULE
*
*         Exemple: mavariable -> Incorrect
*                  maVariable -> Correct
*/

// Je déclare ma variable pour la première fois. On lui donne une valeur :

let maVariable;
maVariable = 'Bob';

// On peut faire les deux opérations sur une même ligne :

let maVariable = 'Bob';

// Vous retrouvez la valeur en appelant simplement la variable par son nom :

maVariable;

// Une fois qu'on a donné une valeur à une variable, on peut la changer plus loin :

let maVariable = 'Bob';
maVariable = 'Étienne';


// Tester:
let a;
console.log(a); //undefined

a = 9.53;
console.log(a); //9.53

a = 3.14;
console.log(a); //9.53

let b = 0; // b contient la valeur 0
b += 1; // b contient la valeur 1
b++; // b contient la valeur 2
console.log(b); // Affiche 2


// VARIANTES DANS LA CREATION DE VARIABLES

// Constante : C'est une variable dont la valeur est constante. On ne pourra pas changer sa valeur une fois déclarée

const maVariable = "Bob";
maVariable = "Emmanuelle"; // Message d'erreur s'affiche car on ne peut pas changer la valeur initiale

// Var : Ancienne méthode de déclaration de variables avant 2015. Fait la même chose que let. Il faut éviter de l'utiliser aujourd'hui.
var maVariable = "Bob";


// B - LES TYPES


//    ==== Chaîne de caractères ===	
//    -> Une suite de caractères connue sous le nom de chaîne. 
//    -> Pour indiquer que la valeur est une chaîne de caractère, il faut la placer entre guillemets.	

let maVariable = 'Bob';


//    ==== Nombre ====	
//    -> Un nombre.  
//    -> Les nombres ne sont pas entre guillemets.	

let maVariable = 10;


//    ==== Booléen ====	
//  -> Une valeur qui signifie vrai ou faux. 
//  -> true/false sont des mots-clés spéciaux en JS, ils n'ont pas besoin de guillemets.		

let maVariable = true;


//    ==== Tableau ====	
//   -> Une structure qui permet de stocker plusieurs valeurs dans une seule variable. 	
//   -> Référez‑vous à chaque élément du tableau ainsi : maVariable[0], maVariable[1], etc.

let maVariable = [1, 'Bob', 'Étienne', 10];


//    ==== Objet ====	
//    -> À la base de toute chose. 	
//    -> Tout est objet en JS et peut être stocké dans une variable.
//    -> Gardez cela en mémoire tout au long de ce cours.

let maVariable = document.querySelector('h1');



// C - LES COMMENTAIRES 

// Commentaire sur une ligne

/* Commentaire sur -------------------
-------------------plusieurs lignes */


// D - LA NOTION D'EXPRESSION

// DÉFINITION:
// Morceau de code qui produit une valeur. 
// C'est une combinaison de variables, de valeurs et de opérateurs. 
// Toute expression produit une valeur et correspond à un certain type. 


// expression dont la valeur est le nombre 5
let a = 5;

// b est une expression dont la valeur est celle de a (ici 5)
a = b;

// (b + 2) est une expression

// Sa valeur est celle de b augmentée de 2 (ici 7)

b = b + 2; // d contient la valeur 7
console.log(b); // Affiche 7

// L'utilisation des parenthèses pour la priorité des opérateurs 
// est la même qu'en mathématiques.

let e = 3 + 2 * 4; // e contient la valeur 11
e = (3 + 2) * 4; // e contient la valeur 20


// E - INTERACTION AVEC L'UTILISATEUR (tester sur jsfiddle)

let prenom = prompt("Entrez votre prénom :");
alert("Bonjour, " + prenom);


// F - APPLICATIONS :
// Observez et tentez de prévoir les valeurs finales de chaque letiable.

let a = 2;
a = a - 1;
a++; // 2
let b = 8;
b += 2; // 10
let c = a + b * b; // 102
let d = a * b + b; // 30
let e = a * (b + b); // 40
let f = a * b / a; // 10
let g = b / a * a; // 10