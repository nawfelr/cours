<?php

// La méthode GET (Superglobale) permet de véhiculer des informations dans l'URL pour les récupérer sur un aautre fichier (ou a un endroit du même fichier) pour un affichage spéciale

// première exemple, je récupère les information sur la même page (comme un one-page)

// deuxième exemple, en récuperent les infos sur une autre page 
// Dans l'attribut href, d'abord j'indique le nom du fichier ou je veux récupérer les infos, puis j'écris ? pour envoyer les infos. Chqauie info étant séparée de la précedente par un &
// target="_blank" permet d'ouvrir une nouvelle page dans un autre onglet

if (!$_GET) {
    echo "<button><a href='get_arriver.php?produit=Gateaux&variete=fraise&prix=12' target='_blank'>Tester</a></button>";
}
