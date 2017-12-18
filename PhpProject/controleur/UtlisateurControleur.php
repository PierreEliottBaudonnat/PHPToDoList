<?php
/**
 * Created by PhpStorm.
 * User: Pierre Eliott
 * Date: 05/12/2017
 * Time: 14:08
 */

namespace controleur;


use modeles\UserModel;
use persistance\Connexion;
use persistance\TacheGateway;
use persistance\UtilisateurGateway;

class UtlisateurControleur
{
    function __construct($action)
    {
        $action=isset($_REQUEST['action'])? $_REQUEST['action']:'NULL';
        switch ($action){
            case "connexion" :
                $this->actionAuthentification();
                break;

            case "validateAuth" :
                $this->actionValidateAuth();
                break;

            case "ajoutTache":
                $this->actionAjoutTache();
                break;

            default :
                require (\config\Config::getVues()["accueil"]);
                break;
        }
    }

    public function actionAuthentification(){
        require (\config\Config::getVues()["auth"]);
    }

    public function actionValidateAuth(){
        //if ($_POST['login'] == 'Pierre Eliott' && $_POST['motDePasse'] == 'poleUSIrugby9'){
        $test = \config\Config::getAuthData($_POST['login'], $_POST['motDePasse']);
        if ($test == true){
            require \config\Config::getVues()["defaultAdmin"];
        }
        else{
            require \config\Config::getVuesErreur()["default"];
        }
        /*
        if (isset($_POST['login']) && isset($_POST['motDePasse'])){
            $utilisateur = UserModel::seConnecter($_POST['login'], $_POST['motDePasse']);
            if ($utilisateur == null){
                require \config\Config::getVuesErreur()["default"];
            }
            else{
                require \config\Config::getVues()["defaultAdmin"];
            }
        }

        $uGat = new UtilisateurGateway(new Connexion("mysql:host=localhost;dbname=pierre eliott", "Pierre Eliott", "poleUSIrugby9"));
        $tGat = new TacheGateway(new Connexion("mysql:host=localhost;dbname=pierre eliott", "Pierre Eliott", "poleUSIrugby9"));

        $utilisateur = $uGat->existe($_REQUEST['login'], $_REQUEST['motDePasse']);
        */
    }

    public function actionAjoutTache(){
        require (\config\Config::getVues()["saisieAjoutTache"]);
    }

}