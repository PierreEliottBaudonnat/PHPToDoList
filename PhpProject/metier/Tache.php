<?php
/**
 * Created by PhpStorm.
 * User: Pierre Eliott
 * Date: 29/11/2017
 * Time: 17:56
 */

namespace metier;

class Tache{
    public $idTache;
    public $titreTache;
    public $description;
    public $duree;

    public function __construct($idTache, $titreTache, $description, $duree){
        $this->idTache= $idTache;
        $this->titreTache=$titreTache;
        $this->description=$description;
        $this->duree=$duree;
    }

    public static function getDefaultInstance(){
        $tache = new self(uniqid(),"", "", "");
        return $tache;
    }

    public function getIdTache(){
        return $this->idTache;
    }

    public function getTitreTache(){
        return $this->titreTache;
    }

    public function getDescription(){
        return $this->description;
    }

    public function getDuree(){
        return $this->duree;
    }

}