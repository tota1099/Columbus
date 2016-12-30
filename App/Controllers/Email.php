<?php

namespace App\Controllers;

use Frame\System\Action;
use Frame\System\Mail;

class EMail extends Action
{
    public function __construct($routeVars = array())
    {
        parent::__construct($routeVars);
    }

    public function sendMail()
    {
        try{
            $body = 'Email: ' . $_POST['email'] . '<br>' .
                'Nome:' . $_POST['nome'] . '<br>'.
                $_POST['body'];
            $Mail = new Mail();
            $Mail->sendMail('contato@renanporto.com.br', 'Email de Contato', $body);
        }
        catch (Exception $e)
        {
            echo $e->getMessage();
        }
    }
}