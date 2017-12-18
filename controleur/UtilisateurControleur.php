<?php
/**
 * Created by PhpStorm.
 * User: Pierre Eliott
 * Date: 05/12/2017
 * Time: 14:08
 */

namespace controleur;


use modeles\TacheModel;
use modeles\UserModel;
use persistance\Connexion;
use persistance\TacheGateway;
use persistance\UtilisateurGateway;

class UtilisateurControleur
{
    public $varLog;
    public $varMdp;

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

            case "validAjout" :
                $this->actionValiderAjout();
                break;

            case "modifTache" :
                $this->actionModifTache();
                break;

            case "validModif" :
                $this->actionValiderModif();
                break;

            case "supprTache" :
                $this->actionSupprTache();
                break;

            case "validSuppr" :
                $this->actionValiderSuppr();
                break;

            default :
                require (\config\Config::getVues()["accueil"]);
                break;
        }
    }

    public function actionAuthentification(){
        require (\config\Config::getVues()["auth"]);
    }

    public function getVarLog(){
        return $this->varLog;
    }

    public function getVarMdp(){
        return $this->varMdp;
    }

    public function actionValidateAuth(){
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
        $test = false;
        if (isset($_POST['login']) && isset($_POST['motDePasse'])){
            $test = \config\Config::getAuthData($_POST['login'], $_POST['motDePasse']);
            if ($test == true)
            {   $this->varLog = $_POST['login'];
                $this->varMdp = $_POST['motDePasse'];
                $_SESSION['login'] = $this->varLog;
                $_SESSION['motDePasse'] = $this->varMdp;
                $login = $this->varLog;
                require \config\Config::getVues()["defaultAdmin"];
            }
        }
        else{
            $test = true;
            $this->varLog = $_SESSION['login'];
            $this->varMdp = $_SESSION['motDePasse'];
            $login = $this->varLog;
            require \config\Config::getVues()["defaultAdmin"];
        }
        if ($test === false){
            require \config\Config::getVuesErreur()["default"];
        }
    }

    public function actionAjoutTache(){
        require (\config\Config::getVues()["saisieAjoutTache"]);
    }

    public function actionValiderAjout(){
        $tGat = new TacheGateway(new Connexion("mysql:host=localhost;dbname=pierre eliott", "Pierre Eliott", "poleUSIrugby9"));
        $res = $tGat->afficherTache($_POST['idTache']);
        if ($res == "0"){
            $model = new TacheModel();
            $model->getModelAjoutTache($_POST['idTache'], $_POST['titreTache'], $_POST['description'], $_POST['duree']);
            require \config\Config::getVues()["success"];
        }
        else{
            require \config\Config::getVuesErreur()["default"];
        }
    }

    public function actionModifTache(){
        require (\config\Config::getVues()["saisieModifTache"]);
    }

    public function actionValiderModif(){
        $tGat = new TacheGateway(new Connexion("mysql:host=localhost;dbname=pierre eliott", "Pierre Eliott", "poleUSIrugby9"));
        $res = $tGat->afficherTache($_POST['idTache']);
        if ($res == "0"){
            require \config\Config::getVuesErreur()["default"];
        }
        else{
            $model = new TacheModel();
            $model->getModelModifTache($_POST['idTache'], $_POST['titreTache'], $_POST['description'], $_POST['duree']);
            require \config\Config::getVues()["success"];
        }
    }

    public function actionSupprTache(){
        require (\config\Config::getVues()["saisieSupprTache"]);
    }

    public function actionValiderSuppr(){
        $tGat = new TacheGateway(new Connexion("mysql:host=localhost;dbname=pierre eliott", "Pierre Eliott", "poleUSIrugby9"));
        $res = $tGat->afficherTache($_POST['idTache']);
        if ($res == "0"){
            require \config\Config::getVuesErreur()["default"];
        }
        else{
            $model = new TacheModel();
            $model->getModelSupprTache($_POST['idTache']);
            require \config\Config::getVues()["success"];
        }
    }

}