// LES BOUCLES 

// La boucle FOR

/* 

for ( 3 arguments){
    ...code...
} 
*/


// for(var i = 1; i<=10; i += 2){
//     document.write("<p> Instruction exécutée : "+ i + "</p>");
// }


//  La boucle WHILE (tant que )

// très utilisée quand on ne connait pas le nombre de tours de boucle à l'avance

// var j = 1;
// while(j <=10){
//     document.write("<hr> <p> Intsructions exécutée: "+ j +"</p>"+ j++ +"</hr>");

// }

var monCompte = 1000;
var temps = 0;

while(monCompte < 2000){
    monCompte += 50;
    temps++

}

document.write("<h3> Sous sur mon compte :" + monCompte + "</h3>"  );
document.write("<h3> Jusqu'à 2000€, il me faut : " + temps + " mois </h3>"  );


// avec une boucle FOR

var tps = 0;

for(var mesSous = 1000; mesSous<2000;mesSous += 50){
    document.write("<h3>Le mois suivants j'ai : "+ mesSous+" </h3>")
    tps++;
}
document.write("<h3>Il aura fallu " +tps+" mois. </h3>")