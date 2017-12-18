<?php
/**
 * Created by PhpStorm.
 * User: Pierre Eliott
 * Date: 23/11/2017
 * Time: 19:27
 */
//si controller pas objet
//  header('Location: controller/controller.php');

//si controller objet

//chargement config
require_once(__DIR__.'/config/config.php');

//chargement autoloader pour autochargement des classes
require_once(__DIR__.'/config/Autoload.php');
\config\Autoload::charger();

$cont = new \controleur\FrontControleur();

?>