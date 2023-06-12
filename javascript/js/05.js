// Structure de bas IF

if(true) {// par defaut la condition à vérifier la IF verifie si elle est vraie
    // ....code....
}

var nb1 = 10;
if (nb1< 50){
    console.log("nb1 est bien inférieur à 50");
}

//ELSE

var delia = 10;
if (delia > 50)



if(true) {// par defaut la condition à vérifier la IF verifie si elle est vraie
    // ....code si VRAI....
} else {
    // ....code si FAUX....

}

if (delia > 50){
    console.log("Delia est bien supérieur à 50");
} else{
    console.log ("delia est inférieur ou égal a 50");
}


// exercice

//  On utilise le if pour vérifier l'age de l'internaute
// => s'il est majeur je lui souhaite la bienvenue
// => Sil 'st mineur je lui [1] signale et [2] je le renvoie vers un autre site

// 1 -- je déclare la majorité legale
// 2-- demander l'âge en s'assurant que nous avons un NUMBER
// 3-- Je verifie si mon internaute est majeur

var majoriteFr= 18;
var age = parseInt(prompt("Indiquez votre age"));

if (age >= majoriteFr){
    alert('Bienvenue, vous êtes majeur') // Bienvenu si vrai
} else{
    // s'il est majeu je lui signal
    alert("Aller voir un autre site")
    // et ensuite je redirige vers jeux pour enfants
    document.location.href="https://www.tfoumax.fr/";
}