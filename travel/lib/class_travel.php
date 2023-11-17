<?php


class Trip
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function insertTrip($title, $description, $price, $image)
    {


        $insertTrip = $this->db->prepare('INSERT INTO trip (`title`,`description`, `price`, `image` ) VALUES (:title, :description, :price, :image)');
        $insertTrip->bindParam(':title', $title);
        $insertTrip->bindParam(':description', $description);
        $insertTrip->bindParam(':price', $price);
        $insertTrip->bindParam(':image', $image);


        if ($insertTrip->execute()) {
            $folder = "assets/images/";
            $path = $folder . $image;
            move_uploaded_file($_FILES['image']['tmp_name'], $path);
            return true;
        } else {
            return false;
        }
    }

    public function selectTrip()
    {
        $selectTrip = $this->db->prepare("SELECT * FROM trip");
        $selectTrip->execute();
        return $selectTrip->fetchAll(PDO::FETCH_ASSOC);
    }
}
