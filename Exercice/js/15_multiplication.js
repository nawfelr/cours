// alert('hi')

var choix = prompt("Choisis un nombre : ");


// for (var i = 1; i <=10; i++) {
//     var res = choix * i;
//     document.write(res +"x"+i+"="+res+"<br>")

// }


// if ((choix >= 2) && (choix <= 9)) {
//     for (var i = 1; i <= 10; i++) {
//         var res = choix * i;
//         document.write(res + "x" + i + "=" + res + "<br>");



//     }
// } else {
//     document.write("<h4>Le chiffre doit être entre 2 et 9 ! </h4>")
// }

while ((choix > 1) || (choix < 10)) {
    if ((choix >= 2) && (choix <= 9)) {
        for (var i = 1; i <= 10; i++) {
            var res = choix * i;
            document.write(res + "x" + i + "=" + res + "<br>");
        }
        break;
    }else{
        choix = Number(prompt(" Le chiffre doit être entre 2 et 9 ! ")) 
        
    }
}