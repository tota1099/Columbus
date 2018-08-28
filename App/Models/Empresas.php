<?php

namespace App\Models;

use Frame\System\DataBase;

class Example extends DataBase
{
    public function getAllUsers()
    {
        $sql =  "SELECT * FROM users";
        return $this->fetchAll($sql);
    }

}