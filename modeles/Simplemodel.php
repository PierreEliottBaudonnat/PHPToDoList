<?php
/**
 * Created by PhpStorm.
 * User: Pierre Eliott
 * Date: 23/11/2017
 * Time: 20:38
 */
namespace modeles;

class Simplemodel{
    protected $dataError;

    public function getError () {
        if (empty($this->dataError)) {
            return false;
        }
        else {
            return $this->dataError;
        }
    }

    public  function __construct($dataError = array()) {
        $this->dataError = $dataError;
    }
}
?>