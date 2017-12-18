<?php
/**
 * Created by PhpStorm.
 * User: Pierre Eliott
 * Date: 05/12/2017
 * Time: 20:56
 */

namespace persistance;

use metier\Tache;
use metier\TachePrivee;

class TacheGateway{

    private $con;

    public function __construct(Connexion $con){
        $this->con=$con;
    }

    public function ajouterTache($idTache, $titreTache, $description, $duree){
        $this->con->executeQuery("INSERT INTO tache VALUES(:idTache, :titreTache, :description, :duree)", array(
            ':idTache' => array($idTache, \PDO::PARAM_INT),
            ':titreTache' => array($titreTache, \PDO::PARAM_STR),
            ':description' => array($description, \PDO::PARAM_STR),
            ':duree' => array($duree, \PDO::PARAM_STR)
        ));
    }

    public function ajouterTachePrivee($idTache, $titreTache, $description, $duree){
        $this->con->executeQuery("INSERT INTO tacheprivee VALUES(:idTache, :titreTache, :description, :duree)", array(
            ':idTache' => array($idTache, \PDO::PARAM_INT),
            ':titreTache' => array($titreTache, \PDO::PARAM_STR),
            ':description' => array($description, \PDO::PARAM_STR),
            ':duree' => array($duree, \PDO::PARAM_STR)
        ));
    }

    public function supprimerTache($idTache){
        $this->con->executeQuery("DELETE FROM tache WHERE idTache = :idTache", array(
            ':idTache' => array($idTache, \PDO::PARAM_INT)
        ));
    }

    public function supprimerTachePrivee($idTache){
        $this->con->executeQuery("DELETE FROM tacheprivee WHERE idTacheP = :idTache", array(
            ':idTache' => array($idTache, \PDO::PARAM_INT)
        ));
    }

    public function modifierTache($idTache, $titreTache, $description, $duree){
        $this->con->executeQuery("UPDATE tache SET titreTache = :titreTache, description = :description, duree = :duree WHERE idTache = :idTache", array(
            ':idTache' => array($idTache, \PDO::PARAM_INT),
            ':titreTache' => array($titreTache, \PDO::PARAM_STR),
            ':description' => array($description, \PDO::PARAM_STR),
            ':duree' => array($duree, \PDO::PARAM_STR)
        ));
    }

    public function modifierTachePrivee($idTache, $titreTache, $description, $duree){
        $this->con->executeQuery("UPDATE tacheprivee SET titreTacheP = :titreTache, descriptionP = :description, dureeP = :duree WHERE idTacheP = :idTache", array(
            ':idTache' => array($idTache, \PDO::PARAM_INT),
            ':titreTache' => array($titreTache, \PDO::PARAM_STR),
            ':description' => array($description, \PDO::PARAM_STR),
            ':duree' => array($duree, \PDO::PARAM_STR)
        ));
    }

    public function afficherTache($idTache){
        $this->con->executeQuery("SELECT COUNT(*) FROM tache WHERE idTache = :idTache", array(
            ':idTache' => array($idTache, \PDO::PARAM_STR)
        ));
        $res= $this->con->getResult();
        foreach ($res as $row){
            foreach ($row as $value){
                return $value;
            }
        }
    }

    public function afficherTachePrivee($idTache){
        $this->con->executeQuery("SELECT COUNT(*) FROM tacheprivee WHERE idTacheP = :idTache", array(
            ':idTache' => array($idTache, \PDO::PARAM_STR)
        ));
        $res= $this->con->getResult();
        foreach ($res as $row){
            foreach ($row as $value){
                return $value;
            }
        }
    }

    public function afficherListeTaches(){
        $this->con->executeQuery("SELECT * FROM tache");
        $res = $this->con->getResult();
        $tab=array();
        foreach ($res as $row){
            $tab[] = new tache ($row['idTache'], $row['titreTache'], $row['description'], $row['duree']);
        }
        return $tab;

    }

    public function afficherListeTachesPrivee(){
        $this->con->executeQuery("SELECT * FROM tacheprivee");
        $res = $this->con->getResult();
        $tab=array();
        foreach ($res as $row){
            $tab[] = new tacheprivee ($row['idTacheP'], $row['titreTacheP'], $row['descriptionP'], $row['dureeP']);
        }
        return $tab;

    }
}