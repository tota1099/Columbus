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
        $this->template->display('home.tpl');
    }

    public function boostrap()
    {
        $this->template->display('boostrap.tpl');
    }
}