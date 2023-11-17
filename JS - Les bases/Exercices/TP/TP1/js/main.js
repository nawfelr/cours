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

console.log("(la solution est " + solution + ")");
for (let i = 0; i <= 7; i++) {
    nbJoueur = parseInt( prompt('Veuillez entrez un nombre entre 0 et 100'));
    if(!isNaN(nbJoueur)){
        
        if (solution === nbJoueur ){
         alert('bravo vous avez trouvé le bon nombre');
         i = 7;
    } else {
            if (solution < nbJoueur ){
          alert('C est plus petit');
       } else {
          alert('C est plus grand');
       }
     
    }
    } else {
        alert("Vous n'avez pas saisi un nombre !");
    }
}