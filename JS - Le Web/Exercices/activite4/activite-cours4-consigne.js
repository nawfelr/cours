// ====== ACTIVITÉ COURS 3 =====

/* GROUPE DE 3 OU 2

Faites des recherches sur les sujet ci-dessous:
Avec Javascript,
1 - Détecter le mouvement de la souris
2 - Lire le contenu d'un champ texte dans un formulaire

Puis réaliser les tâches suivantes sur le HTML du fichier activite-cours4.html


/*
Ecoutez les événements input sur l'élément #name afin de savoir quand le contenu du champ texte est changé. Affichez le contenu actuel dans l'élément #res-name
*/
var nom = document.getElementById("name").addEventListener("input",function(e){
    document.getElementById("res-name") = e.target.value;
});


/*
Ecouter l'événement du changement de choix du genre (#gender), et afficher le résultat dans l'élément #res-gender.
*/

  
/*
Afficher les coordonnées de la souris à l'intérieur de l'élément #result dès que celle-ci passe par dessus. Ce que nous voulons, c'est avoir les coordonnées relatives au coin en haut à gauche de l'élément #result.
*/
  


  