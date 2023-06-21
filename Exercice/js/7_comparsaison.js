var nombre1 = parseInt(prompt("Numéro 1"));

var nombre2 = parseInt(prompt("Numéro 2"));

if ((!isNaN(nombre1)) && (!isNaN(nombre2))){
    // en jS NaN est l'abréviation de "NOT-A-NUMBER"
    // isNaN() la méthode renvoie true si une valeur est NaN

if ( nombre1 < nombre2){
    document.write ("votre 1er nombre: "+ nombre1 +" est plus petit que votre 2nd "+nombre2);
    
}else if(nombre1 > nombre2){
    document.write("Votre 1er nombre : " +nombre1+ " est supérieur à votre deuxième nombre " + nombre2 )
} else{
    document.write("Votre 1er nombre : " +nombre1+" est égal à votre 2nd :"+nombre2);
}
    
} else{
    alert("Vous n'avez pas saisi de chiffre/(s)");
    // ne rentre jamais dans cette condition car forcément un nombre avec le parseInt
}