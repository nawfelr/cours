// FOR

var manege = 0;
while (manege <= 10){
    document.write (" c'est le tour de n°"+ manege+ "<br>");
    manege++;
}
document.write("<hr>")


// FOR

for (var i = 1; i<=10; i++){
    document.write(" c'est le tour de n°" + i + "<br>");
}
document.write("<hr>")

// prompt WHILE

var question = parseInt(prompt("Combien de tours voulez-vous faire?"));
var compteur = 1;
while (compteur <= question) {
    document.write("C'est le tour n° " + compteur + "<br>");
    compteur++;
} document.write("<hr>");
