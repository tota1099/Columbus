<?php

namespace App\Controllers;

use Frame\System\Action;

class Site extends Action
{
    public function __construct($routeVars = array())
    {
        parent::__construct($routeVars);
    }

    public function home()
    {
        $this->template->assign('userName', 'Columbus');
        $this->template->display('home.tpl');
    }

    public function teste(){
        echo 'OK!';
    }
}