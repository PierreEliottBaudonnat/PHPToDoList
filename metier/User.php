<?php
/**
 * Created by PhpStorm.
 * User: Pierre Eliott
 * Date: 17/12/2017
 * Time: 15:24
 */

namespace metier;


class User{

    private $login;
    private $motDePasse;

    public function __construct($login, $motDePasse){
        $this->login= $login;
        $this->motDePasse = $motDePasse;
    }

    public function getLogin(){
        return $this->login;
    }

    public function getMotDePasse(){
        return $this->motDePasse;
    }

}