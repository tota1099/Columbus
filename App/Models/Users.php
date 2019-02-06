<?php

namespace App\Models;

use Frame\System\DataBase;

class Users extends DataBase
{
    public function getNameById($userId = 0)
    {
        if($userId <= 0 ){
            return '';
        }
        
        $sql =  "SELECT username FROM users WHERE id = {$userId} ";
        return $this->fetchColumn($sql);
    }

}