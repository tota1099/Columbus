<?php

namespace App\Controllers;

use Frame\System\Action;
use App\Models;

class Login extends Action
{
    public function __construct($routeVars = array())
    {
        parent::__construct($routeVars);
    }

    public function listarEmpresas()
    {
        $Empresa = new Models\Empresas();
        $teste = $Empresa->retornar();
        $this->add('abc',$teste);
        $this->render('listarEmpresas');
    }

    public function enviar_email_example()
    {
        $recipients[0]['email'] = "renan.porto1099@gmail.com";
        $recipients[0]['name'] = "Renan Porto";
        $recipients[1]['email'] = "renan_m_porto@hotmail.com";
        $recipients[1]['name'] = "Renan";

        $this->sendMail('Teste de Email2323', 'Este é um teste de EMAIL',$recipients);
    }

}