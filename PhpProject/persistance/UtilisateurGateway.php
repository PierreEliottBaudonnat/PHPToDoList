<?php
/**
 * Created by PhpStorm.
 * User: Pierre Eliott
 * Date: 17/12/2017
 * Time: 14:21
 */

namespace persistance;

use metier\User;


class UtilisateurGateway{

    private $con;

    public function __construct(Connexion $con){
        $this->con=$con;
    }

    public function ajouterUtilisateur($login, $motDePasse){
        $this->con->executeQuery("INSERT INTO user VALUES(:login, :motDePasse)", array(
            ':login' => array($login, \PDO::PARAM_STR),
            ':motDePasse' => array($motDePasse, \PDO::PARAM_STR)
        ));
    }

    public function supprimerUtilisateur($login){
        $this->con->executeQuery("DELETE FROM user WHERE login = :login", array(
            ':login' => array($login, \PDO::PARAM_STR)
        ));
    }

    public function modifierUser($login, $motDePasse){
        $this->con->executeQuery("UPDATE user SET login = :login, motDePasse = :motDePasse WHERE login = :login", array(
            ':login' => array($login, \PDO::PARAM_STR),
            'motDePasse' => array($motDePasse, \PDO::PARAM_STR)
        ));
    }

    /*
    public static function Existe($login, $motDePasse){
        $con2= new Connexion("mysql:host=localhost;dbname=pierre eliott", "Pierre Eliott", "poleUSIrugby9");
        $con2->executeQuery("SELECT $login FROM user WHERE login = :login AND motDePasse = :motDePasse", array(
            'Pierre Eliott' => array($login, \PDO::PARAM_STR),
            'poleUSIrugby9' => array($motDePasse, \PDO::PARAM_STR)
        ));
        $tmp = $con2->getResult();
        if($tmp == null){
            return null;
        }
        else{
            return new User("$login", "$motDePasse");
        }
    }
    */
    public function existe($login, $motDePasse){
        $this->con->executeQuery("SELECT $login FROM user WHERE login = :login AND motDePasse = :motDePasse", array(
            ':login' => array($login, \PDO::PARAM_STR),
            ':motDePasse' => array($motDePasse, \PDO::PARAM_STR)
        ));
        $res = $this->con->getResult();
        if($res==null){
            return null;
        }
        else{
            return new User($login, $motDePasse);
        }
    }

}