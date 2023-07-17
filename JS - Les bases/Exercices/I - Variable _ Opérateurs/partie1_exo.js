// [ source: https://github.com/oc-courses/intro-javascript ]


// ===== Les variables ======

/* 
* Exo 1: Ecrivez un programme qui affiche votre nom, puis votre âge.
*/

let prenom = prompt("Entrez votre prénom");
let age = parseInt(prompt("Entrez vorez age"));
alert ("Vous vous appeler "+ prenom);
alert(" et vous avez " + age + " ans.");



/* 
* Exo 2: 
* Ecrivez un programme qui calcule et affiche le résultat de l'addition, 
* de la soustraction, de la multiplication et de la division de 9 par 3.
*/
let addition = 9+3;
let soustraction = 9-3;
let multiplication = 9*3;
let division = 9/3;
alert(" le résultat de l'addition de 9 par 3 est = " + addition + "le résultat de la soustraction de 9 par 3 est = "+ soustraction + ". Le réusltat de la multiplication de 9 par 3 est = " + multiplication + ". Le résultat de la division de 9 par 3 est = " + division + ".")




/* 
* Exo 3: 
* Observez le programme puis tentez de prévoir les valeurs affichées lors de son exécution.
* Vérifiez vos prévisions en l'exécutant.
*/

console.log(4 + 5);
// 9
console.log("4 + 5");
// (4 + 5)
console.log("4" + "5");
// 45

/* 
* Exo 4: 
* Observez le programme et tentez de prévoir les valeurs finales de chaque variable.
* Vérifiez vos prévisions en l'exécutant.
*/

var a = 2;
a -= 1;
a++;
var b = 8;
b += 2;
var c = a + b * b;
var d = a * b + b;
var e = a * (b + b);
var f = a * b / a;
var g = b / a * a;
console.log(a, b, c, d, e, f, g);

// Résultats

var a = 2;
a = a - 1;
a++;
// a = 2
var b = 8;
b += 2;
//  b= 10
var c = a + b * b;
// c = 102
var d = a * b + b;
// d = 30
var e = a * (b + b);
// e = 40
var f = a * b / a;
// f = 10
var g = b / a * a;
    // g = 10


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

var tempCel = 37.1;

// Ajoutez ici le code pour convertir tempCel en degrés Fahrenheit
let tempFar = (tempCel *9/5)+32;
alert ( "La température en degrés est : " + tempCel + " degres celcius. alors qu'en fahrenheit elle est de : " +tempFar+ " °F.");

/* 
* Exo 6: 
* Complétez le programme afin qu'il permute les valeurs des deux variables.
* Il existe plusieurs solutions à cet exercice. 
* Astuce : vous n'êtes pas limité(e) à l'utilisation de deux variables.
*/

var nombre1 = 5;
var nombre2 = 3;

// Tapez votre code ici (sans rien modifier d'autre !)
tmp = nombre1;
nombre1 = nombre2;
nombre2 = tmp;

console.log(nombre1); // Doit afficher 3
console.log(nombre2); // Doit afficher 5