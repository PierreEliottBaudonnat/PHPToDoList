<?php
/**
 * Created by PhpStorm.
 * User: Pierre Eliott
 * Date: 10/12/2017
 * Time: 13:09
 */

namespace modeles;

use persistance\Connexion;
use persistance\TacheGateway;
use metier\Tache;

class ListeTachesModel extends Simplemodel
{
    private $listeTaches;

    public function getData(){
        return $this->listeTaches;
    }

    /*
    public function __construct(array $dataError = array())
    {
        parent::__construct($dataError);
        $this->listeTaches = array();
    }
    */
    public function getModelListeTachesPubliques(){
        $n = new TacheGateway(new Connexion("mysql:host=localhost;dbname=pierre eliott", "Pierre Eliott", "poleUSIrugby9"));
        $tGat= $n->afficherListeTaches();
        //var_dump($tGat);
        foreach ($tGat as $row){
            echo "<input type='checkbox'>";
            //echo var_dump($row);
            foreach ($row as $value){
                echo "<p id='testPhp'> $value </p>";
                //echo var_dump($value);
            }
            echo "<br>";
        }
    }
}



//$taches[] = new tache($value['idTache'], $value['titreTache'], $value['description'], $value['duree']);
//$value=$row[0];
