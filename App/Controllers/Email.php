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
            $subject = 'Email: ' . $_POST['nome'] . '<br>' .
                'Nome:' . $_POST['adress'] . '<br>' .
                $subject;

            $body = $_POST['body'];
            $Mail = new Mail();
            $Mail->sendMail('contato@renanporto.com.br', $subject, $body);
        }
        catch (Exception $e)
        {
            echo $e->getMessage();
        }
    }
}