
// document.getElementById('voiture').addEventListener('change', function () {

//     var fichier =  'action.php';
//     xhttp = new XMLHttpRequest();

//     var valeur = this.value;
//     var params = 'voiture =' + valeur;
//     xhttp.open("POST", fichier, true);

//     xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

//     xhttp.onreadystatechange = function (){
//         // console.log(xhttp.readyState);
//         if (xhttp.status == 200 && xhttp.readyState == 4){
            
//             document.getElementById("modele").innerHTML = xhttp.responseText;
//         }
//         }
//           xhttp.send(params);
// });

document.getElementById('voiture').addEventListener('change', function () {

    // fichier cible
    var fichier = 'action.php';

    // instanciation de l'obje ajax
    var xhttp = new XMLHttpRequest();

    // on récupère la valeur du champs pays
    var valeur = this.value;
    // var valeur = document.getElementById('pays').value;
    console.log("Valeur Voiture : " + valeur);

    // préparation des paramètres pour POST
    var params = 'voiture=' + valeur;
    console.log(params);

    // préparation de la requête ajx
    xhttp.open("POST", fichier, true);
    // dans open() 3 arguments :
    // - la méthode POST ou GET
    // - le fichier cible
    // - optionnel asynchrone ou pas (true/false) c'est un true par défaut

    // en méthode POST, la ligne suivante est obligatoire et doit se trouver après la ligne .open()
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    xhttp.onreadystatechange = function () {
        if (xhttp.status == 200 && xhttp.readyState == 4) {
            console.log(xhttp.responseText);

            document.getElementById("modele").innerHTML = xhttp.responseText;
        }
    }

    // on envoie la requête
    xhttp.send(
        params); // on envoie la requête ajax. Les paramètres de POST se placent dans la méthode .send(parameters)

});