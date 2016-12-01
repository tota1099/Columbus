<?php

namespace FRAME\system;

class DataBase
{
    protected $DB;

    public function __construct()
    {
        $this->DB = $this->getDB();
    }

    protected function getDB()
    {
        try {
            $DB = new \PDO('mysql:host=' . __HOST . ';dbname=' . __BDNAME . ';charset=utf8', __USER , __PASS );

            $DB->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            date_default_timezone_set("Brazil/East");

            return $DB;
        }
        catch (\PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    public function fetchAll($SQL)
    {
        $consulta = $this->DB->query($SQL);
        while ($linha = $consulta->fetch(\PDO::FETCH_ASSOC)) {
            $retorno[] = $linha;
        }
        return $retorno;
    }
}