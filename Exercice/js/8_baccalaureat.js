var moyenne = parseFloat(prompt("Quelle est ta moyenne au bac ?"));

if( moyenne < 10){
    document.write("Tu es recalé"); // j'affiche tu es recalé
} else if ((moyenne >=10)&&  (moyenne<12)){ // sinon si la moyenne est entre 10 et 12
    document.write("Tu passes !") // J'affiche que le candidat passe

}else if ((moyenne>=12)&& (moyenne <20)){
    document.write('Psahtek la mention') // j'affiche qu'il a un emention
    

} else if ((moyenne=20)){
     document.write("t'es vraiment un mec chaud mon gars, personne ne t'arrive a la chveille");

}else {
    // en cas de saisi ne rentrant pas dans les cas ci-avant
    document.write("Saisi des chiffres y lhagone")
}