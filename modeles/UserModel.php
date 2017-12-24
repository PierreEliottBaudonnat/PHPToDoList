<?php
/**
 * Created by PhpStorm.
 * User: Pierre Eliott
 * Date: 17/12/2017
 * Time: 15:29
 */

namespace modeles;

use metier\User;

class UserModel extends Simplemodel {

    public static function seConnecter($login, $motDePasse){
        $login = \controleur\Validation::validationString($login);
        $motDePasse = \controleur\Validation::validationString($motDePasse);
        $utilisateur = \persistance\UtilisateurGateway::Existe($login, $motDePasse);
        if ($utilisateur == null){
            return null;
        }
        else{
            $_SESSION['login']=$login;
            $_SESSION['role']="utilisateur";
            return $utilisateur;
        }

    }

    public static function deconnexion(){
        session_unset();
        session_destroy();
        $_SESSION=array();
    }

    public static function isUser(){
        if (isset($_SESSION['login']) && isset($_SESSION['role'])){
            $login = \controleur\Validation::validationString($_SESSION['login']);
            $motDePasse = \controleur\Validation::validationString($_SESSION['role']);
            return new User($login, $motDePasse);
        }
    }
}