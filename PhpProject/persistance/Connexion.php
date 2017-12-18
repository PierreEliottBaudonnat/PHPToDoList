<?php
/**
 * Created by PhpStorm.
 * User: Pierre Eliott
 * Date: 09/12/2017
 * Time: 19:18
 */

namespace persistance;


class Connexion extends \PDO
{
    private $stmt;

    public function __construct($dsn, $username, $passwd)
    {
        parent::__construct($dsn, $username, $passwd);
        $this->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    }

    public function executeQuery($query, array $parametre = []){
        $this->stmt = parent::prepare($query);
        foreach ($parametre as $name => $value){
            $this->stmt->bindValue($name, $value[0], $value[1]);
        }
        $this->stmt->execute();
    }

    public function getResult(){
        return $this->stmt->fetchall();
    }
}