<?php
/**
 * Created by PhpStorm.
 * User: Pierre Eliott
 * Date: 29/11/2017
 * Time: 18:16
 */

namespace metier;


class TacheFabrique{
    protected static function validateIdTache($idTache){
        if(!isset($idTache) || !preg_match('/^[0-9a-zA-Z]/', $idTache)){
            throw new Exception("Erreur : l'idTache doit être renseigné !");
        }
    }

    protected static function validateTitreTache($titreTache){
        if(!isset($titreTache) || !preg_match('/^[0-9a-zA-Z]/', $titreTache)){
            throw new Exception("Erreur : le titre doit être renseigné !");
        }
    }

    protected static function validateAuteur($auteur){
        if(!isset($idTache) || !preg_match('/^[a-zA-Z]/', $idTache)){
            throw new Exception("Erreur : l'idTache doit être renseigné et ne doit pas contenir de chiffres !");
        }
    }

}