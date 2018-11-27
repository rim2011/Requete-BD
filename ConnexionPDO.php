<?php
/**
 * Created by PhpStorm.
 * User: RIM
 * Date: 26/11/2018
 * Time: 13:42
 */

class ConnexionPDO
{
    private static $cnxPDO=null;
    const BD_NAME = "select_test";
    const USER = "root";
    const PWD = "";
    const HOST = "localhost";
    private function __construct()
    {
        try {
            self::$cnxPDO = new PDO("mysql:host=" . self::HOST . ";dbname=" . self::BD_NAME
                . ";charset=utf8", self::USER,
                self::PWD);
        } catch (PDOException $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }

  /*  public function getCnxPDO(){
        return $this->cnxPDO;
    }*/

    public static function getInstance()
    {
        if (!self::$cnxPDO) {
            new ConnexionPDO();

        }
        return (self::$cnxPDO);
    }
}
