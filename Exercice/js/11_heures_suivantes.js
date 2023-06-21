var heure = prompt("Entre l'heure")


var minute = prompt("Entre les minutes ")

var seconde = prompt("Entre les secondes ")

if((heure >= 0) && (heure <= 23 ) && (minute >=0) && (minute<=59) && (seconde>=0) && (seconde<=59) ){
    seconde++; //On incrément les secondes
    if(seconde === 60){ // on met les secondes à 0 et on passe a la minute suivante
        seconde = 0;
        minute++;
        if (minute=== 60 ) { // On met les minutes a 0 et on passe à l'heure suivante
            minute = 0;
            heure++;
            if (heure === 24){
                // L'heure suivante est minuit
                heure = 0;
            }

        }

    }
// l'affichage de l'heure
document.write ("<h3> Dans une seconde il sera " + heure + " h " + minute + " m " + seconde +" s " +"</h3>")

} else {
    document.write("heure incorrecte")
}