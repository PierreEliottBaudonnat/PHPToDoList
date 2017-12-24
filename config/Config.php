<?php
/**
 * Created by PhpStorm.
 * User: Pierre Eliott
 * Date: 05/12/2017
 * Time: 14:42
 */

namespace config;


class Config
{
    /*
    public static function getAuthData(&$db_host, &$db_user, &$db_password){

        $db_host="mysql:host=localhost;dbname=pierre eliott";
        $db_user="Pierre Eliott";
        $db_password="poleUSIrugby9";
    }
    */
    public static function getAuthData($login, $mdp){
        if ($login == "Pierre Eliott" && $mdp == "pepebaud"){
            return true;
        }
        if ($login == "Guillaume" && $mdp == "guiguichap"){
            return true;
        }
        else{
            return false;
        }
    }

    public static function getVues(){
        global $rootDirectory;

        $vueDirectory=$rootDirectory."vues/";

        return array(
            "accueil" => $vueDirectory."vuephp1.php",
            "anonyme" => $vueDirectory."vueAnonyme.php",
            "auth" => $vueDirectory."vueAuthentification.php",
            "defaultAdmin" => $vueDirectory."vueDefaultAdmin.php",
            "saisieAjoutTache" => $vueDirectory."vueSaisieAjoutTache.php",
            "saisieModifTache" => $vueDirectory."vueSaisieModifTache.php",
            "saisieSupprTache" => $vueDirectory."vueSaisieSupprTache.php",
            "success" => $vueDirectory."success.php",
            "successPrivee" => $vueDirectory."successPrivee.php",
            "saisieAjoutTachePrivee" => $vueDirectory."vueSaisieAjoutTachePrivee.php",
            "saisieModifTachePrivee" => $vueDirectory."vueSaisieModifTachePrivee.php",
            "saisieSupprTachePrivee" => $vueDirectory."vueSaisieSupprTachePrivee.php"
        );
    }

    public static function getVuesErreur(){
        global $rootDirectory;

        $vueDirectory=$rootDirectory."vues/";

        return array(
            "default" => $vueDirectory."erreur.php"
        );
    }

    public static function getRootURI() {
        global $rootURI;
        return $rootURI;
    }

}