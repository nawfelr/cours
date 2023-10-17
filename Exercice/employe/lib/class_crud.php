<?php

require_once('db.php');

class Crud
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    // AJOUT D'EMPLOYER

    public function insertEmploye($prenom, $nom, $sexe, $service, $dateEmbauche, $salaire, $idSecteur)
    {


        $insertEmploye = $this->db->prepare('INSERT INTO employe (`prenom`, `nom`, `sexe`,`service`,`dateEmbauche`,`salaire`,`idSecteur` ) VALUES (:prenom, :nom, :sexe, :service, :dateEmbauche, :salaire, :idSecteur)');
        $insertEmploye->bindParam(':prenom', $prenom);
        $insertEmploye->bindParam(':nom', $nom);
        $insertEmploye->bindParam(':sexe', $sexe);
        $insertEmploye->bindParam(':service', $service);
        $insertEmploye->bindParam(':dateEmbauche', $dateEmbauche);
        $insertEmploye->bindParam(':salaire', $salaire);
        $insertEmploye->bindParam(':idSecteur', $idSecteur);

        if ($insertEmploye->execute()) {

            return true;
        } else {
            return false;
        }
    }

    // SELECTION DE TOUS LES EMPLOYES

    public function selectAllEmploye()
    {
        $selectAllEmploye = $this->db->prepare("SELECT * FROM employe");
        $selectAllEmploye->execute();
        return $selectAllEmploye->fetchAll(PDO::FETCH_ASSOC);
    }

    // SELECTION D'UN SEUL EMPLOYE

    public function selectOneEmploye($idEmploye)
    {
        $idEmploye = $_GET['idEmploye'];
        $selectOneEmploye = $this->db->prepare("SELECT * FROM employe WHERE `idEmploye` = :idEmploye");
        $selectOneEmploye->bindParam(':idEmploye', $idEmploye);
        $selectOneEmploye->execute();
        return $selectOneEmploye->fetch(PDO::FETCH_ASSOC);
    }

    // VIRER UN EMPLOYE


    public function deleteEmploye($idEmploye)
    {
        $idEmploye = $_GET['idEmploye'];
        $deleteEmploye = $this->db->prepare("DELETE  FROM employe WHERE idEmploye = :idEmploye");
        $deleteEmploye->bindParam(':idEmploye', $idEmploye);
        if ($deleteEmploye->execute()) {
            header('location: ../CRUD.php');
        }
    }

    // MODIFICATION DES DONNES D'UN EMPLOYE

    public function updateEmploye($prenom, $nom, $sexe, $service, $dateEmbauche, $salaire, $idSecteur, $idEmploye)
    {
        $idEmploye = $_GET['idEmploye'];
        $deleteEmploye = $this->db->prepare("UPDATE `employe` SET `prenom`=:prenom,`nom`=:nom,`sexe`=:sexe,`service`=:service,`dateEmbauche`=:dateEmbauche,`salaire`=:salaire,`idSecteur`=:idSecteur WHERE idEmploye = :idEmploye");
        $deleteEmploye->bindParam(':prenom', $prenom);
        $deleteEmploye->bindParam(':nom', $nom);
        $deleteEmploye->bindParam(':sexe', $sexe);
        $deleteEmploye->bindParam(':service', $service);
        $deleteEmploye->bindParam(':dateEmbauche', $dateEmbauche);
        $deleteEmploye->bindParam(':salaire', $salaire);
        $deleteEmploye->bindParam(':idSecteur', $idSecteur);
        $deleteEmploye->bindParam('idEmploye', $idEmploye);

        if ($deleteEmploye->execute()) {
            return true;
        };
    }
}
