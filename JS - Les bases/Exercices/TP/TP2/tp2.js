// ACTIVITE 1

/*
===== CRÉER UN GÉNÉRATEUR DE CITATION =====

Niveau 1

Les citations seront construites aléatoirement en assemblant des morceaux de phrase
Chaque citation est la combinaison d'au moins 3 morceaux de phrases (ex: sujet, verbe, complément)
A défaut d'être intelligible, la phrase doit être cohérente (pas de point d'exclamation au milieu d'une phrase)
Le résultat peut être simplement affiché dans la console

Niveau 2

Le programme propose les options suivantes :
- Choisir le nombre de citations générées (de 1 à 5)
- Choisir entre 2 types de générateurs de citations (vous devrez donc avoir 2 ensembles de phrases)
- Une fois les citations générées, proposer de générer de nouvelles citations ou d'arrêter là le programme

Remarque: la fonction .reload() n'est pas autorisée
*/


let sujet = [ "Hajare","Imane","Jalala","Stephanie","Adrienne"];

let verbe = [ " frappa"," brula", " molesta", " demonta (dans le sens bagarre)", " souleva"];

let complement = [" Mickael."," Bachir.", " Guillaume.", " Ahmed.", " Nawfel."]


function random() {
    return Math.floor(Math.random() * sujet.length);
}




let sujetHomme = ["Guillaume", "Mickael", "Sebastien", "Adrien", "Bachir"];

let verbeHomme = [" embrassa", " murmura a l'oreil de ", " caressa le bras de", " regarda d'un air amoureux", " envoya un lettre d'amour a "];

let complementHomme = [" Jason.", " John.", " Franck.", " Erik.", " Ahmed."]


let rsujetHomme 
let rverbeHomme 
let rcomplementHomme 


function citaHomme() {
    rsujetHomme = sujetHomme[random()];
    rverbeHomme = verbeHomme[random()];
    rcomplementHomme = complementHomme[random()];
    document.getElementById("citation").innerHTML += '<p>' + rsujetHomme + rverbeHomme + rcomplementHomme + '</p>'
   
}
let rsujet;
let rverbe;
let rcomplement;


function citaFemme() {
    rsujet = sujet[random()];
    let rverbe = verbe[random()];
    let rcomplement = complement[random()];
document.getElementById("citation").innerHTML += '<p>' + rsujet + rverbe + rcomplement + '</p>'
}


document.getElementById("btn1").addEventListener("click", function () {
   citaFemme();
});

document.getElementById("btn2").addEventListener("click", function () {
    citaHomme();
});
