var mois = parseInt(prompt("Quelle mois choisissez vous","<saisir un chiffre entre 1 et 12>"));

if(mois === 2){ // Si on a choisi Février => 2
    document.write ("Le mois numéro " + mois +" fait 28 jours.")

} else if ((mois === 4) || (mois === 6) || (mois === 9) || (mois === 11) ){// Si on a choisi un mois qui fait 30 jours
    document.write(" Le mois numéro " + mois +" fais 30 jours.")

} else if ((mois === 1) || (mois === 3) || (mois === 5) || (mois === 7) || (mois === 8) || (mois === 10) || (mois === 12)) {// Si on a choisi un mois qui fait 31 jours
    document.write(" Le mois numéro " + mois + " fais 30 jours.")

} else{
    document.write("Votre choix "+ mois+ " ne correspond pas a un numero de  mois du calendrier  ")
}