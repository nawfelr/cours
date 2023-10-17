<?php
require_once('db.php');

class Article
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function insertArticle($title, $price, $image, $id_user)
    {

        $id_user = $_SESSION['id_user'];
        $insertArticleQuery = $this->db->prepare('INSERT INTO article (`title`, `price`, `image`,`id_user` ) VALUES (:title, :price, :image, :id_user)');
        $insertArticleQuery->bindParam(':title', $title);
        $insertArticleQuery->bindParam(':price', $price);
        $insertArticleQuery->bindParam(':image', $image);
        $insertArticleQuery->bindParam(':id_user', $id_user);

        if ($insertArticleQuery->execute()) {
            $folder = "images/";
            $path = $folder . $image;
            move_uploaded_file($_FILES['image']['tmp_name'], $path);
            return true;
        } else {
            return false;
        }
    }

    public function selectAllArticles()
    {
        $selectAllQuery = $this->db->prepare("SELECT * FROM article");
        $selectAllQuery->execute();
        return $selectAllQuery->fetchAll(PDO::FETCH_ASSOC);
    }

    public function selectArticle3()
    {
        $selectBy3 = $this->db->prepare("SELECT * FROM article ORDER BY `id_article` DESC LIMIT 3");

        $selectBy3->execute();
        return $selectBy3->fetchAll(PDO::FETCH_ASSOC);
    }


    public function addCart($id_user, $id_article)
    {

        $selectCart = $this->db->prepare("INSERT INTO `orders`( `id_user`, `id_article`) VALUES (:id_user,  :id_article)");
        $selectCart->bindParam(':id_user', $id_user);
        $selectCart->bindParam(':id_article', $id_article);

        if ($selectCart->execute()) {

            return true;
        } else {
            return false;
        }
    }

    public function selectCart()
    {
        $id_user = $_SESSION['id_user'];
        $selectByCart = $this->db->prepare("SELECT * FROM `orders` INNER JOIN `article` ON orders.id_article = article.id_article WHERE orders.id_user = $id_user ");
        if ($selectByCart->execute()) {



            return  $selectByCart->fetchAll(PDO::FETCH_ASSOC);
        } else {
            return false;
        }
    }

    public function selectArticleById($idArticle)
    {
        $idArticle = $_GET['idarticle'];

        $select = $this->db->prepare("SELECT * FROM article WHERE `id_article` = :idarticle ");
        $select->bindParam(':idarticle', $idArticle, PDO::PARAM_INT);
        if ($select->execute()) {

            return $select->fetch(PDO::FETCH_ASSOC);
        } else {
            return false;
        }
    }

    public function deleteArticle($idOrders)
    {
        $idOrders = $_GET['id_orders'];

        $delArticle = $this->db->prepare("DELETE FROM orders WHERE id_orders = :idorders ");
        $delArticle->bindParam(':idorders', $idOrders, PDO::PARAM_INT);
        if ($delArticle->execute()) {
        } else {
            return false;
        }
    }


    public function setQuantity()
    {
        $idOrders = $_GET['id_orders'];
        $sql = $this->db->prepare('UPDATE orders SET `quantite`=:quantite WHERE `id_orders` = id_orders ');
        $sql->bindParam(':idorders', $idOrders, PDO::PARAM_INT);
        $sql->bindParam(':quantite', $quantite, PDO::PARAM_INT);

        if ($sql->execute()) {
        } else {
            return false;
        }
    }
}

//SELECT * FROM `orders` INNER JOIN `article` ON orders.id_article = article.id_article