<?php
/**
 * Created by PhpStorm.
 * User: Pierre Eliott
 * Date: 05/12/2017
 * Time: 14:09
 */

namespace controleur;


use modeles\ListeTachesModel;
use modeles\Simplemodel;
use modeles\TacheModel;

class VisiteurControleur
{
    function __construct($action){
        $action=isset($_REQUEST['action'])? $_REQUEST['action']:'NULL';
        switch ($action){
            case "anonyme" :
                $this->actionVoirListeTachesPubliques();
                break;
            case "voirTache":
                $this->actionVoirTache();
                break;
            default:
                require (\config\Config::getVues()["accueil"]);
                break;
        }
    }

    public function actionVoirTache(){
        //On récupère l'ID de l'instance
        $action=isset($_REQUEST['action'])? $_REQUEST['action']:'NULL';
        $idTache=filter_var($action, FILTER_SANITIZE_NUMBER_INT);
        //On construit le modèle et on implémente la persistance
        $modele= new TacheModel();
        $modele->getModelTache($idTache);
        require (\config\Config::getVues()["afficheTache"]);
    }

    public function actionVoirListeTachesPubliques(){
        //$modele = new ListeTachesModel();
        //$modele->getModelListeTachesPubliques();
        require (\config\Config::getVues()["anonyme"]);
    }


}