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
        $n = new TacheGateway(new Connexion("mysql:host=localhost;dbname=pierre eliott", "Pierre Eliott", "pepebaud"));
        $n->afficherTache($idTache);
    }

    public function getModelTachePrivee($idTache){
        $n = new TacheGateway(new Connexion("mysql:host=localhost;dbname=pierre eliott", "Pierre Eliott", "pepebaud"));
        $n->afficherTachePrivee($idTache);
    }

    public function getModelAjoutTache($idTache, $titreTache, $description, $duree){
        $n = new TacheGateway(new Connexion("mysql:host=localhost;dbname=pierre eliott", "Pierre Eliott", "pepebaud"));
        $n->ajouterTache($idTache, $titreTache, $description, $duree);
    }

    public function getModelAjoutTachePrivee($idTache, $titreTache, $description, $duree){
        $n = new TacheGateway(new Connexion("mysql:host=localhost;dbname=pierre eliott", "Pierre Eliott", "pepebaud"));
        $n->ajouterTachePrivee($idTache, $titreTache, $description, $duree);
    }

    public function getModelModifTache($idTache, $titreTache, $description, $duree){
        $n = new TacheGateway(new Connexion("mysql:host=localhost;dbname=pierre eliott", "Pierre Eliott", "pepebaud"));
        $n->modifierTache($idTache, $titreTache, $description, $duree);
    }

    public function getModelModifTachePrivee($idTache, $titreTache, $description, $duree){
        $n = new TacheGateway(new Connexion("mysql:host=localhost;dbname=pierre eliott", "Pierre Eliott", "pepebaud"));
        $n->modifierTachePrivee($idTache, $titreTache, $description, $duree);
    }

    public function getModelSupprTache($idTache){
        $n = new TacheGateway(new Connexion("mysql:host=localhost;dbname=pierre eliott", "Pierre Eliott", "pepebaud"));
        $n->supprimerTache($idTache);
    }

    public function getModelSupprTachePrivee($idTache){
        $n = new TacheGateway(new Connexion("mysql:host=localhost;dbname=pierre eliott", "Pierre Eliott", "pepebaud"));
        $n->supprimerTachePrivee($idTache);
    }
}