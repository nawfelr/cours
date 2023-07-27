// [ source: https://github.com/oc-courses/intro-javascript ]
/* 
* Exo 1: * Ecrivez un programme qui fait saisir un nom de jour à l'utilisateur,
* puis affiche le nom du jour suivant.
* S'il y a des erreurs de saisie (jour incorrect), cela doit être géré !
* A toi de voir comment.
*/

// code ici
let day = prompt("Veuillez entre le nom d'un jour de la semaine");

if (day === 'lundi') {
    document.write("mardi");
} else if (day === "mardi") {
    document.write("mercredi");
} else if (day === "mercredi") {
    document.write("jeudi");
} else if (day === 'jeudi') {
    document.wtrite('vendredi');
} else if (day === "vendredi") {
    document.write('samedi')
} else if (day === "samedi") {
    document.write("dimanche")
} else if (day === "dimanche") {
    document.write("lundi")
} else {
    document.write("Vous avez entrez un nom de jour incorrecte ou mis des majuscule")
}

/* 
* Exo 2:
* Complétez ce programme pour afficher l'heure qu'il sera dans une seconde.
* Attention, ce programme est moins simple qu'il en a l'air : validez votre solution 
* en la testant avec les entrées suivantes. Vous devez obtenir les résultats indiqués.
    14h17m59s => 14h18m0s
    6h59m59s => 7h0m0s
    23h59m59s => 0h0m0s (minuit)
*/


// Ajoutez votre code ici


let heures = parseInt(prompt('Veuillez entre une heure')); // Faire varier cette variable entre 0 et 23
let minutes = parseInt(prompt('Veuillez entre un nombre de minutes')); // faire varier cette variable entre 0 et 59
let secondes = parseInt(prompt('Veuillez entre un nombre de secondes')); // faire varier cette variable entre 0 et 59

// Ajoutez votre code ici

if ((heures > 0 && heures <= 23) && (minutes > 0 && minutes >= 59) && (secondes > 0 && minutes <= 59)) {
    secondes++;
    if (secondes == 60) {
        secondes = 0;
        minutes++;
        if (minutes == 60) {
            minutes = 0;
            heures++;
            if (heures == 24) {
                heures = 0;
            }
        }
    }
}


document.write('dans une seconde il sera : ' + heures + ' heures ' + minutes + ' mins et ' + secondes + 'secondes');



/*
* Exo 3 
*
* Ecrivez un programme qui fait saisir la note d'examen d'un étudiant. 
* => utiliser: let moyenne = Number(prompt("Entrez une moyenne de baccalauréat :"));
* puis affiche si ce candidat est recalé (moyenne inférieure à 10), 
* reçu (moyenne entre 10 et 12) 
* ou reçu avec mention (moyenne supérieure ou égale à 12).
* Essayer avec méthode "if... else" 
*
* Tester le même exercice avec "switch" 
*   -> la moyenne est sur 10
*   -> si de 1 à 4: recalé
*   -> si 5: reçu
*   -> + de 5: reçu avec mention
*/


let moyenne = parseInt(prompt("Veuillez entrer votre moyenne"));

// if (moyenne < 10) {
//     document.write("recalé");
// } else if ( (moyenne >=10) && (moyenne<12) ) {
//     document.write("reçu");
// } else if (moyenne > 12 ) {
//     document.write("reçu avec mention");
// } else {
//     document.write("Veuillez entrer une moyenne correcte")
// }




switch (moyenne) {
    case 1:
        console.log("recalé");
        break;
    case 2:
        console.log("recalé");
        break;
    case 3:
        console.log("recalé");
        break;
    case 4:
        console.log("recalé");
        break;
    case 5:
        console.log("reçu");
        break;
    case 6:
        console.log("reçu avec mention");
        break;
    case 7:
        console.log("reçu avec mention");
        break;
    case 8:
        console.log("reçu avec mention");
        break;
    case 9:
        console.log("reçu avec mention");
        break;
    case 10:
        console.log("reçu avec mention");
        break;
    default:
        console.log("Veuillez entrer une moyenne correcte");
}