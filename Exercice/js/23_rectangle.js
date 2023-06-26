'use strict' // Mode strict du JS

// 1-Variable

//Recherche du boutton dans l'arbre DOM = Document Object Model

var buton = document.getElementById('toggle-rectangle');

//Recherche du rectangle dans l'arbre DOM 

var rectangle = document.querySelector('.rectangle');


// 2-Fonctions

// 1--fonction au click sur le bouton

function onclick(){
    rectangle.classList.toggle('hide');
}