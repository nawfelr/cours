// [ source: https://github.com/oc-courses/intro-javascript ]


// ===== Les variables ======

/* 
* Exo 1: Ecrivez un programme qui affiche votre nom, puis votre âge.
*/

let monAge = parseInt(prompt("Veuillea entrez votre age"));

let monNom = prompt("Veuillea entrez votre nom");


console.log (" Vous vous appelez : "+ monNom + " et vous avez :" + monAge + " ans.")


/* 
* Exo 2: 
* Ecrivez un programme qui calcule et affiche le résultat de l'addition, 
* de la soustraction, de la multiplication et de la division de 9 par 3.
*/

let addition = 9+3;
let soustraction = 9-3;
let multiplication= 9*3;
let division= 9/3;

console.log(addition);
console.log(soustraction);
console.log(multiplication);
console.log(division);

/* 
* Exo 3: 
* Observez le programme puis tentez de prévoir les valeurs affichées lors de son exécution.
* Vérifiez vos prévisions en l'exécutant.
*/

console.log(4 + 5);
// 9
console.log("4 + 5");
// 4+5
console.log("4" + "5");
// 45

/* 
* Exo 4: 
* Observez le programme et tentez de prévoir les valeurs finales de chaque variable.
* Vérifiez vos prévisions en l'exécutant.
*/

let a = 2;
a -= 1;
a++;
// a=2
let b = 8;
b += 2;
// b=10

let c = a + b * b;
// c=102

let d = a * b + b;
// d=30
let e = a * (b + b);
// e=40
let f = a * b / a;
// f=10
let g = b / a * a;
// g=10
console.log(a, b, c, d, e, f, g);


/* 
* Exo 5: 
* Complétez le programme pour convertir une tempéraure des degrés Celsius en degrés Fahrenheit.

/* C'est à Daniel Gabriel Fahrenheit que l'on doit l'invention des thermomètres 
en graduation Fahrenheit. Au début, ses thermomètres sont à l'alcool (1709), 
mais il remplace rapidement l'alcool par du mercure (1715), permettant à ses 
outils de mesure de fournir des données comparables. En 1742, un autre 
scientifique, Anders Celsius, propose une nouvelle graduation au thermomètre. 
La conversion entre les échelles est donnée par [°F] = [°C] x 9/5 + 32. 
*/

let tempCel = 37.1;

let tempFar = tempCel *(9/5)+32;

console.log(tempFar);


// Ajoutez ici le code pour convertir tempCel en degrés Fahrenheit


/* 
* Exo 6: 
* Complétez le programme afin qu'il permute les valeurs des deux variables.
* Il existe plusieurs solutions à cet exercice. 
* Astuce : vous n'êtes pas limité(e) à l'utilisation de deux variables.
*/

let nombre1 = 5;
let nombre2 = 3;



// Tapez votre code ici (sans rien modifier d'autre !)


let temp = nombre1;
nombre1 = nombre2;
nombre2 = temp;


console.log(nombre1); // Doit afficher 3
console.log(nombre2); // Doit afficher 5