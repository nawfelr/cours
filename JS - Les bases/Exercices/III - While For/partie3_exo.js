// [ source: https://github.com/oc-courses/intro-javascript ]

/*
* EXERCICE 1 - Les instructions
* Ecrivez un programme qui fait saisir un nombre à l'utilisateur 
* puis affiche la table de multiplication de ce nombre.
* en utilisant while
* en utilisant for
* TODO : MESSAGE: Choisissez la table entre 2 et 10
* TODO : affichage de la table de multiplication ds la console
*/



// Code ici

let nombre = parseInt(prompt("Veuillez entrer un nombre"));
let multiple = 2;

while (multiple<=10){
console.log ( nombre + "x" + multiple + " = " + nombre * multiple);
multiple++;
}


// let nombre = parseInt(prompt("Veuillez entrer un nombre"))


// for (let multiple= 2 ; multiple <=10; multiple++){
//     let multiplication = nombre * multiple;
// console.log(multiplication);
// }

















/*
* EXERCICE 2 - Les instructions
* Ecrivez un programme qui construit progressivement un triangle de 7 lignes:

# 
## 
### 
#### 
##### 
###### 
#######

*/



// Code ici





let etoile = "";

for ( let ligne = 1; ligne <=7; ligne ++){
    console.log(etoile = etoile+"#");
}







/* 
* EXERCICE 3: Complétez ce programme pour qu'il fasse 10 tours de manège en affichant le numéro du tour à chaque tour :

    Le manège démarre
    C'est le tour numéro 1
    C'est le tour numéro 2
    ...
    C'est le tour numéro 10
    Le manège s'arrête



*/
console.log("le manege demarre");

for (let tourDeManege = 1; tourDeManege <=10; tourDeManege++){
    console.log("c'est le tour numéro :" + tourDeManege)
}

console.log("le manege s'arrete");





/* 
* EXERCICE 4:
* Ecrivez un programme qui affiche tous les nombres entre 1 et 100 avec les exceptions suivantes :
    - Il affiche "Fizz" à la place du nombre si celui-ci est divisible par 3.
    - Il affiche "Buzz" à la place du nombre si celui-ci est divisible par 5 et non par 3.
    - Il affiche "FizzBuzz" à la place du nombre si celui-ci est divisible à la fois par 3 et par 5.
    - Vous pouvez utiliser l'opérateur modulo % qui renvoie le reste de la division d'un entier par un autre.

console.log(10 % 2); // 0
console.log(10 % 3); // 1
console.log(11 % 3); // 1
Cet exercice constitue un test d'embauche classique qui élimine un nombre significatif de candidats. 
Accrochez-vous pour le réussir !
*/


for (let i=1; i<=100;i++){
    if ((i % 3 === 0) && (i % 5 === 0))
        console.log("FizzBuzz");       
    else if (i % 5 === 0 )
        console.log ("buzz");
    else if (i % 3 === 0)
        console.log("fizz");
     else
        console.log(i);
     
}