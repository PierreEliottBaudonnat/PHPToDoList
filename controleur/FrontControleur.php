<?php
/**
 * Created by PhpStorm.
 * User: Pierre Eliott
 * Date: 23/11/2017
 * Time: 19:28
 */

namespace controleur;

use modeles\Simplemodel;

class FrontControleur{

    function __construct() {
        global $rep,$vues;                      // nécessaire pour utiliser variables globales
        session_start();                        // on démarre ou reprend la session si necessaire (préférez utiliser un modèle pour gérer vos session ou cookies)

        $dVueEreur = array ();                  //on initialise un tableau d'erreur

        try{
            $action=isset($_REQUEST['action'])? $_REQUEST['action']:'NULL';     //ne rien faire
            switch($action) {
                case "anonyme":
                    $_SESSION['role'] = "anonyme";
                    new VisiteurControleur($action);
                    break;
                case "inscription":
                    break;

                case "validateAuth" :
                    $_SESSION['role']="admin";
                    new UtilisateurControleur($action);
                    break;

                case "validAjout" :
                    $_SESSION['role']="admin";
                    new UtilisateurControleur($action);
                    break;

                case "validAjoutPrivee" :
                    $_SESSION['role']="admin";
                    new UtilisateurControleur($action);
                    break;

                case "validModif" :
                    $_SESSION['role']="admin";
                    new UtilisateurControleur($action);
                    break;

                case "validModifPrivee" :
                    $_SESSION['role']="admin";
                    new UtilisateurControleur($action);
                    break;

                case "validSuppr" :
                    $_SESSION['role']="admin";
                    new UtilisateurControleur($action);
                    break;

                case "validSupprPrivee" :
                    $_SESSION['role']="admin";
                    new UtilisateurControleur($action);
                    break;

                case "connexion":
                    $_SESSION['role']="utilisateur";
                    new UtilisateurControleur($action);
                    break;

                case "ajoutTache":
                    $_SESSION['role']="admin";
                    new UtilisateurControleur($action);
                    break;

                case "ajoutTachePrivee" :
                    $_SESSION['role']="admin";
                    new UtilisateurControleur($action);
                    break;

                case "modifTache" :
                    $_SESSION['role'] = "admin";
                    new UtilisateurControleur($action);
                    break;

                case "modifTachePrivee" :
                    $_SESSION['role'] = "admin";
                    new UtilisateurControleur($action);
                    break;

                case "supprTache" :
                    $_SESSION['role']="admin";
                    new UtilisateurControleur($action);
                    break;

                case "supprTachePrivee" :
                    $_SESSION['role']="admin";
                    new UtilisateurControleur($action);
                    break;

                case "validationFormulaire":
                    $this->ValidationFormulaire($dVueEreur);
                    break;
                default:                        //mauvaise action
                    require (\config\Config::getVues()["accueil"]);
                    break;
            }
        }
        catch (PDOException $e){
            $dVueEreur[] =	"Erreur inattendue!!! ";    //si erreur BD, pas le cas ici
            require ($rep.$vues['erreur']);
        }
        catch (Exception $e2){
            $dVueEreur[] =	"Erreur inattendue!!! ";
            require ($rep.$vues['erreur']);
        }
        exit(0);
    }                                               //fin constructeur


    function Reinit() {
        global $rep,$vues;                          // nécessaire pour utiliser variables globales

        $dVue = array (
            'nom' => "",
            'age' => 0,
        );
        require ($rep.$vues['vuephp1']);
    }

    function ValidationFormulaire(array $dVueEreur) {           //si exception, ca remonte !!!
        global $rep,$vues;

        $nom=$_POST['txtNom'];                                // txtNom = nom du champ texte dans le formulaire
        $age=$_POST['txtAge'];
        Validation::val_form($nom,$age,$dVueEreur);
        $model = new Simplemodel();
        $data=$model->get_data();

        $dVue = array (
            'nom' => $nom,
            'age' => $age,
            'data' => $data,
        );
        require ($rep.$vues['vuephp1']);
    }

}

?>