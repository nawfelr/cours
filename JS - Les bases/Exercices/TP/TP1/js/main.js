/*
TP 1 - Réaliser le jeu du + et du - 

Objectif: Ecrire un programme qui fait deviner un nombre entre 1 et 100.

Le jeu choisit aléatoirement un nombre entre 1 et 100, */


    // Cette ligne génère aléatoirement un nombre entre 1 et 100

/*
puis il met le joueur au défi de le deviner en 7 tentatives maximum.
Le joueur devine ce nombre en faisant des propositions.
À chaque tour, le joueur doit être informé s'il a deviné ou non le bon nombre
— si ce n'est pas le cas, le programme lui dit si le nombre qu’il a saisi est trop petit ou trop grand,
On considèrera que la saisie du joueur est toujours un nombre valide.

Le jeu se termine quand le joueur a deviné le nombre mystère,
ou s'il a épuisé ses 7 chances.
A la fin du jeu, le joueur a la possibilité de débuter une nouvelle partie.

Commencer par créer 2 fichiers: index.html et main.js.
*/

// Coder ici

let solution = Math.floor(Math.random() * 100) + 1;

let reponse = parseInt(prompt("Veuillez entrez un nombre entre 0 et 100"))
for (let reponse = 0; reponse < 7; index++) {
    if (reponse == solution){
        console.log("Bravo tu as la bonne réponse")
    } else if(reponse>solution){
        console.log("Votre choix est trop grand")
    } else if (reponse < solution){
        console.log("Votre choix est trop petit")
    } else{
        console.log("Votre choix est pas bon ")
    }
}





let nombre = Number(prompt("Entrez un nombre :"));
if(nombre>0){
    console.log(nombre+ " est positif ");
}else{
    console.log(nombre+ " est négatif ou nul")
}



let outil1 = "fourchette";
let outil2 = "couteau";

if ((outil1 === "fourchette") && (outil2 === "couteau")){
    console.log("Je mange un plat de tajine");
}


if ((outil1 === "fourchette") && (outil2 === "cuillere")) {
    console.log("Je mange mange mon crumble au pomme");
}


 