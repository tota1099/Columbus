<?php

namespace App\Controllers;

use Frame\system\Action;
use App\Models;

class Empresa extends Action
{
    public function listagem_empresas()
    {
        $Empresa = new Models\Empresas();
        $teste = $Empresa->retornar();
        $this->add('abc',$teste);
        $this->render('Empresa');
    }
}