alert("Bonjour nous allons vérifier ensemble votre vitesse");

var vitesse = parseInt(prompt("A quelle vitesse roules tu ??"));



if(vitesse <= 50 ){
    document.write("Félicitations tu roules à la bonne vitesse, tu roules à" +" "+ vitesse +" km/H");

    var image = document.createElement("img")

    image.src ="assets/img/content.png"

    document.body.appendChild(image)

}else if((vitesse>50)&&(vitesse<=64)){
    document.write("Fais un petit effort et ralenti un petit peu, tu roules à " + vitesse + " km/h");

    var image2 = document.createElement("img")

    image2.src = "assets/img/decend.png"

    document.body.appendChild(image2)

}else if ((vitesse>= 65) && (vitesse<=80)){
    document.write("Sah mon reuf tu deviens dangereux calm down t'es à "+ vitesse + " km/h")

    var image3 = document.createElement("img")

    image3.src = "assets/img/enerverdeouf.png"

    document.body.appendChild(image3)

}else{
    document.write("T'abuses tu roules comme Bachir un jour de Jumuua, tu roules à " + vitesse + " km/h");

    var image4 = document.createElement("img")

    image4.src = "assets/img/haaaa.png"

    document.body.appendChild(image4)
}




