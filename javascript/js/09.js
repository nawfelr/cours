// Créer un tableau 

// var arr = new Array(element0, element1, element2);
// var arr = Array(element0, element1, element2);
// var arr = [element0, element1, element2];

var fruit = [ 'Apple', 'Banana', 'Fraise'];
console.log(fruit.length); // lenght affiche le nombre d'element ( combien de fruits)


// Acceder (via son index) à élément du tableau

var first = fruit [0];
console.log (first);

var last = fruit [1]

console.log (last);

var last = fruit [fruit.length -1]; // Nous accedons à l'index du tableau dans le sens inverse
console.log (last);

// Au lieu de changer le tableau, on modifie

// 1. Ajouter à la fin du tableau 
var newLength = fruit.push('orange');
console.log(newLength);

// ["Apple", "Banana", "Fraise", "orange"]

// 2. Supprimer le dernier élément du tabelau

var last = fruit.pop(); //supprimer Orange (à la fin)
console.log(fruit); 

