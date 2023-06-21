for (var i = 1; i <= 10; i++) {
    if (i % 2 === 0) { // Si i est pair
        document.write("<h3>" + i + " est pair </h3>");
    } else {
        document.write("<h3>" + i + " est impair </h3>");
    }
} document.write("<hr>");
    
// 1ere méthode

var chiffre = parseInt(prompt("choisir un nombre entier"));
var chiffreMax = (chiffre + 10);

while (chiffre <= chiffreMax){
    if (chiffre % 2 === 0){
        document.write("<h3>" + chiffre + " est pair </h3>");
    } else {
        document.write("<h3>" + chiffre + " est impair </h3>");
    }
    chiffre++;
}
document.write ("<hr>")


// 2eme méthode

var nbUser = parseInt(prompt("Ton chiffre ?"));
var nbuserMax = (nbUser + 10)

for ( var tour = nbUser; tour < nbuserMax; tour++){
    if (tour % 2 === 0) {
        document.write("<h3>" + tour + " est pair </h3>");
    } else {
        document.write("<h3>" + tour + " est impair </h3>");
    }

}