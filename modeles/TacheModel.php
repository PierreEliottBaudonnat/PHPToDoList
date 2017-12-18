<?php
/**
 * Created by PhpStorm.
 * User: Pierre Eliott
 * Date: 05/12/2017
 * Time: 20:37
 */

namespace modeles;


use persistance\Connexion;
use persistance\TacheGateway;

class TacheModel extends Simplemodel
{
    private $tache;

    public function getData(){
        return $this->tache;
    }

    public static function getModelDefaultTache(){
        $model=new self(array());
        $model->tache = \metier\Tache::getDefaultInstance();
        return $model;
    }

    public function getModelTache($idTache){
        $n = new TacheGateway(new Connexion("mysql:host=localhost;dbname=pierre eliott", "Pierre Eliott", "poleUSIrugby9"));
        $n->afficherTache($idTache);
    }

    public function getModelAjoutTache($idTache, $titreTache, $description, $duree){
        $n = new TacheGateway(new Connexion("mysql:host=localhost;dbname=pierre eliott", "Pierre Eliott", "poleUSIrugby9"));
        $n->ajouterTache($idTache, $titreTache, $description, $duree);
    }

    public function getModelModifTache($idTache, $titreTache, $description, $duree){
        $n = new TacheGateway(new Connexion("mysql:host=localhost;dbname=pierre eliott", "Pierre Eliott", "poleUSIrugby9"));
        $n->modifierTache($idTache, $titreTache, $description, $duree);
    }

    public function getModelSupprTache($idTache){
        $n = new TacheGateway(new Connexion("mysql:host=localhost;dbname=pierre eliott", "Pierre Eliott", "poleUSIrugby9"));
        $n->supprimerTache($idTache);
    }
}