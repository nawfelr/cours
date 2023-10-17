<?php

require_once('lib/bdd.php');

class Produit
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    // AJOUT DE PRODUITS

    public function insertProduit($title, $description, $price, $city, $postal_code, $image)
    {


        $insertProduit = $this->db->prepare('INSERT INTO `produit`( `title`, `description`, `price`, `city`, `postal_code`, `image`) VALUES (:title, :description, :price, :city, :postal_code, :image)');
        $insertProduit->bindParam(':title', $title);
        $insertProduit->bindParam(':description', $description);
        $insertProduit->bindParam(':price', $price);
        $insertProduit->bindParam(':city', $city);
        $insertProduit->bindParam(':postal_code', $postal_code);
        $insertProduit->bindParam(':image', $image);



        if ($insertProduit->execute()) {
            return true;
        } else {
            return false;
        }
    }

    // SELECTION DE 15 PRODUITS DECROISSANTS

    public function select15Produit()
    {
        $select15Produit = $this->db->prepare("SELECT * FROM `produit` ORDER BY id_produit DESC LIMIT 15");
        $select15Produit->execute();
        return $select15Produit->fetchAll(PDO::FETCH_ASSOC);
    }


    // SELECTION DES PRODUITS 

    public function selectAllProduit()
    {
        $selectAllProduit = $this->db->prepare("SELECT * FROM `produit`");
        $selectAllProduit->execute();
        return $selectAllProduit->fetchAll(PDO::FETCH_ASSOC);
    }

    // SELECTION D'UN SEUL PRODUIT SELON SON ID

    public function selectOneProduit($idProduit)
    {
        $idProduit = $_GET['id_produit'];
        $selectOneProduit = $this->db->prepare("SELECT * FROM produit WHERE `id_produit` = :id_produit");
        $selectOneProduit->bindParam(':id_produit', $idProduit);
        $selectOneProduit->execute();
        return $selectOneProduit->fetch(PDO::FETCH_ASSOC);
    }

    // RERSERVER UN PRODUIT


    public function reservProduit($idProduit, $reservation_text)
    {

        $idProduit = $_GET['id_produit'];

        $reservProduit = $this->db->prepare("UPDATE `produit` SET `reservation_text`=:reservation_text WHERE id_produit = :idProduit");
        $reservProduit->bindParam(':reservation_text', $reservation_text);
        $reservProduit->bindParam(':idProduit', $idProduit);
        if ($reservProduit->execute()) {
            header('location: tous_les_produits.php');
        }
    }
}
