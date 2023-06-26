'use strict' //Mod estrict du JavaScript

//Declaration d'une variable

var nombre;

// La boucle do while s'éxecutera toujours au moins une fois, alors que la boucle while peut n epas s'éxecuter si la condition est fausse dés le départ

// On utilisant cette boucle quand elle doit s'executer au moins une fois pour que la comparaison puisse s'effectuer.

do{
    nombre = parseFloat(window.prompt('Veuillez choisisir un nombre :'));
} while(isNaN(nombre) == true);


document.write(' <p> Merci, vous avez saisi <strong>' +nombre + '</strong></p>')
