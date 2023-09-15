<?php

if (isset($_POST['Envoyer'])) {
    $erreur = "";
    //La fonction extract($_POST) permet d'extraire les données du tableau $_POST et de créer des variables avec les noms correspondants
    extract($_POST);
    // FILTER_SANITIZE_SPECIAL_CHARS permet de nettoyer le nom et le prénom en supprimant les caracères spéciaux
    $nom = filter_var($nom, FILTER_SANITIZE_SPECIAL_CHARS);
    $prenom = filter_var($prenom, FILTER_SANITIZE_SPECIAL_CHARS);
    // Pour chaque caractère spéciale, il effectue l'une des actions suivantes:
    // Il le supprime si il est dangereux ou non désiré
    // Il se convertit en son équivalent HTML entité ce qui signifie qu'il le remplace par une séquence de caractères HTML qui est sécuritaire à afficher dans une page web 

    // Valider l'email
    if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
        $erreur .= 'Email incorrect <br>';
    }
    // Vérifie si le champ 'domaine' n'est pas défini

    if (!isset($domaine)) {
        $erreur .= "Vous devez choisir un domaine <br>";
    }
    //  Vérifie si le champ 'lang" n'est pas défini
    if (!isset($lang)) {
        $erreur .= "Vous devez choisir une langue<br>";
    }
    // Vérifie si le champ pays n'est pas défini ou est vide
    if (!isset($pays) || empty($pays)) {
        $erreur .= "Vous devez choisir votre pays <br>";
    }
    // Vérifie si le champ sexe n'est pas défini ou est vide
    if (!isset($sexe)) {
        $erreur .= "Vous devez choisir votre sexe <br>";
    }

    // Affiche les erreurs si il y en a
    if ($erreur != "") {
        die($erreur); // la fonction die arrête immédiatement l'éxecution du script PHP et affiche le contenu de la variable $erreur
    } else {
        // Si le formulaire est valide affiche le résultat dans un tableau HTML 
        $resultat = "<table border> ";
        $resultat .= "<tr> <td> Champ </td> <td>Valeurs</td> </tr>";
        $resultat .= "<tr>
            <td>Nom</td>
            <td> $nom</td>
        </tr>";
        $resultat .= "<tr>
            <td>Prenom</td>
            <td> $prenom</td>
        </tr>";
        $resultat .= "<tr>
            <td>Mail</td>
            <td> $email</td>
        </tr>";
        $resultat .= "<tr>
            <td>Sexe</td>
            <td> $sexe</td>
        </tr>";
        // La fonction implode pour rassembler les élèments du tableau 'domaine' en une chaine séparée par des virgules
        $resultat .= "<tr>
            <td>Domaine</td> 
            <td> " . implode(",", $domaine) . "</td>
        </tr>";
        $resultat .= "<tr>
            <td>Pays</td>
            <td> $pays</td>
        </tr>";
        $resultat .= "<tr>
            <td>Domaine</td> 
            <td> " . implode(",", $lang) . "</td>
        </tr>";
        $resultat .= '</table>';

        echo $resultat;
    }
}
