// [ source: https://github.com/oc-courses/intro-javascript ]


/*
* EXERCICE 1 - les tableaux
* Complétez le programme pour calculer puis afficher la somme des valeurs du tableau nombres.
*/

let nombres = [11, 3, 7, 2, 9, 10];

let result=0;

for (let i = 0; i < nombres.length; i++){
    
     result += nombres[i];
     
}
console.log(result);


/*
* EXERCICE 2 - les tableaux
* Complétez le programme pour qu'il calcule et affiche ensuite la plus grande valeur présente dans le tableau.
*/

let valeurs = [3, 11, 7, 2, 9, 10];
let max = Math.max(valeurs)

console.log(max)

// AUTRE SOLUTION POSSIBLES

let maxi= valeur[0];

for (let i = 0; i < valeurs.length; i++) {
    const element = array[i];
    
}


/*
* EXERCICE 3 - les tableaux
* Ecrivez un programme qui crée un tableau contenant les noms des trois mousquetaires, Athos, Porthos et Aramis ;
* 1- Affiche le nom de chaque mousquetaire à l'aide d'une boucle for ;
* 2- Ajoute au tableau le mousquetaire d'Artagnan ;
* 3- Affiche de nouveau le nom de chaque mousquetaire, cette fois à l'aide de la méthode forEach().
*/

// code 


let mousquetaire = ["Athos","Porthos","Aramis"];

// for (let i = 0; i < mousquetaire.length; i++) {
//     console.log(mousquetaire[i]);
// }

mousquetaire.push("d'Artagnan");
mousquetaire;

mousquetaire.forEach(function (mousquetaire) {
    console.log(mousquetaire);
})
/*
* EXERCICE 4 - les tableaux
* Ecrivez un programme qui fait saisir à l'utilisateur des mots jusqu'à ce qu'il saisisse "stop".
* Le programme affiche alors la liste des mots saisis.
*/

// code 

let attribut = prompt("Veuillez saisir un mot");
let tableau = [attribut];


while ( tableau [0] !== "stop"){
    tableau.push(attribut);
    
} 
console.log(tableau);


