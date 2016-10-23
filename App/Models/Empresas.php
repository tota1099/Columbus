<?php

namespace App\Models;

use Frame\System\DataBase;

class Empresas extends DataBase
{
    public function retornar()
    {
        $sql =  "SELECT * FROM usuarios";

        return array(
            array('ep_nome_empresa' => 'Renan Porto'),
            array('ep_nome_empresa' => 'Raiza Porto'),
            array('ep_nome_empresa' => 'Teste'),
        );
    }

}