var jour = window.prompt("Quel jour sommes nous ?");

// ...............lundi...............

if (jour === "lundi"){
    document.write("Demain nous serons mardi incha Allah");
} else if((jour === "mardi") ){
     document.write("Demain nous serons mercredi incha Allah");

}else if((jour === "mercredi") ){
     document.write("Demain nous serons jeudi incha Allah");


}else if((jour === "jeudi") ){
     document.write("Demain nous serons vendredi incha Allah");


} else if((jour === "vendredi") ){
     document.write("Demain nous serons samedi incha Allah");


} else if((jour === "samedi") ){
     document.write("Demain nous serons dimanche incha Allah");


} else if((jour === "dimanche") ){
     ("Demain nous serons mercredi incha Allah");


} else{
    document.write("Ce jour n'existe pas");
};


switch (jour){
    case "lundi":
        console.log ("Demain on est mardi");
    break;

    case "mardi":
         console.log ("Demain on est mercredi");
    break;

    case "mercredi":
         console.log ("Demain on est jeudi");
    break;

    case "jeudi":
         console.log ("Demain on est vendredi");
    break;

    case "vendredi":
         console.log ("Demain on est samedi");
    break;

    case "samedi":
         console.log ("Demain on est dimanche");
    break;

    case "dimanche":
         console.log ("Demain on est lundi");
    break;

    default:
         console.log ("Désolé, veuillez verifier l'orthographe de votre jour");

}