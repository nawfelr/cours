// alert("ça marche");


// l'operateur de comparaison == signifie 'egal a'
var nb1 = 123;
var nb2 = "123";

console.log(nb1 == nb2); // retourne TRUE

// L'opérateur de comparaison === signifie 'strictement egal à'
// il permet de vérifier la valeur et le type

console.log(nb1 === nb2); // retourne FALSE

// L'opérateur != signifie 'different de ...VALEUR

console.log(nb1 != nb2); 
// L'opérateur !== signifie 'strictement différent de ..en type et en valeur'

console.log(nb1 !== nb2); //retourne TRUE


// J'arrive sur un espace sécurisé au moyen du prénom et de l'âge

//je dois saisir mon prénom et mon âge pour être authentifié sur le site
// en cas d'échec une alerte m'informe du problème
// si tous ce passe bien un message de bienvenue m'accueil

var prenom,monAge;
prenom= "Nawfel";
monAge=23;


//1-- Demander son prénom à l'utilsateuir avec un prompt

var prenomLogin = prompt("Quel est votre prénom");

// 2-- Je vérifie si le prenom saisi(prenomLogin) correspond à (prenom)
if (prenom === prenomLogin){
    // 2.1 Si tout est ok, je continue la vérification avec l'âge
   var ageLogin = parseInt(prompt("Votre âge ?"));// 2.2 Demande a l'utilisateur son âge via un PROMPT
        if ( ageLogin === monAge ){
    alert("Bienvenue " + prenomLogin);
        }else{
// 2.3 Si les ages ne correondent pas, je lance une ALERT
    alert("Erreur d'âge");
        }

} else{
    // 2.4 Sinon, les prénoms ne correspondent pas, je lance une ALERT
    alert("Attention, prénom non reconnu");
}
