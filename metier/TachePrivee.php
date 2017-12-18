<?php
/**
 * Created by PhpStorm.
 * User: Pierre Eliott
 * Date: 18/12/2017
 * Time: 23:14
 */

namespace metier;


class TachePrivee
{
    public $idTacheP;
    public $titreTacheP;
    public $descriptionP;
    public $dureeP;

    public function __construct($idTacheP, $titreTacheP, $descriptionP, $dureeP){
        $this->idTacheP= $idTacheP;
        $this->titreTacheP=$titreTacheP;
        $this->descriptionP=$descriptionP;
        $this->dureeP=$dureeP;
    }

    public static function getDefaultInstance(){
        $tache = new self(uniqid(),"", "", "");
        return $tache;
    }

    public function getIdTache(){
        return $this->idTacheP;
    }

    public function getTitreTache(){
        return $this->titreTacheP;
    }

    public function getDescription(){
        return $this->descriptionP;
    }

    public function getDuree(){
        return $this->dureeP;
    }
}