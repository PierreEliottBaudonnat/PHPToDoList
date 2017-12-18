<?php
/**
 * Created by PhpStorm.
 * User: Pierre Eliott
 * Date: 23/11/2017
 * Time: 20:44
 */

namespace controleur;

class Validation {                                                              //on pourrait aussi utiliser

    static function val_action($action) {                                           //$action = $_GET['action'] ?? 'no';
        if (!isset($action)) {                                                  // This is equivalent to:
            throw new Exception('pas d\'action');                           //$action =  if (isset($_GET['action'])) $action=$_GET['action']  else $action='no';
        }
    }

    static function val_form(string &$nom, string &$age, array &$dVueEreur) {
        if (!isset($nom)||$nom=="") {
            $dVueEreur[] =	"pas de nom";
            $nom="";
        }


        if ($nom != filter_var($nom, FILTER_SANITIZE_STRING))
        {
            $dVueEreur[] =	"testative d'injection de code (attaque sécurité)";
            $nom="";
        }

        if (!isset($age)||$age==""||!filter_var($age, FILTER_VALIDATE_INT)) {
            $dVueEreur[] =	"pas d'age ";
            $age=0;
        }
    }

    public static function validationString($string){
        return filter_var($string, FILTER_SANITIZE_STRING);
    }

    public static function validationInt($int){
        return filter_var($int, FILTER_SANITIZE_NUMBER_INT);
    }
}

?>