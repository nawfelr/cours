// alert ("HI");


/*

LA CONCATENATION

*/


var annee = 2017;
var futur = 3;
var calcul = annee + futur;
console.log(calcul)
document.write(calcul+"<br>"); // -> 2020 qui s'affiche avec saut de ligne


var mois = "7";
var calcul2 = annee + mois;
console.log(calcul2); // 20177 parce que pas de calcul avec des strings
document.write(calcul2+"<br>"); 

var debutPhrase = "Aujourd'hui ";
var nbStagiaires = 12;
var suitePhrase = " stagiares";
var finPhrase = "sont présents.";

document.write(debutPhrase+nbStagiaires+suitePhrase+" "+finPhrase);