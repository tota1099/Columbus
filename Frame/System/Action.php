<?php

namespace Frame\System;

class Action
{
    protected $template;
    protected $routeVars;

    public function __construct($routeVars)
    {
        $this->routeVars = $routeVars;
        $this->runSmarty();
    }

    public function index()
    {
        if ( array_key_exists(0, $this->routeVars) )
        {
            $function = new \ReflectionClass(get_class($this));
            $this->add('className', $function->getShortName());
            $this->add('methodName', $this->routeVars[0]);
            $this->render('index');
        }
        else
        {
            die('Algum erro aconteceu!! Contacte o administrador. #errorMethodIndex');
        }
    }

    private function runSmarty()
    {
        // Instância o Smarty
        require_once LIBRARY_VENDOR . 'Smarty/libs/Smarty.class.php';
        $this->template = new \Smarty;
        $this->config_smarty();
    }

    public function render($action, $layout = true)
    {
        $this->template->display($action.'.tpl');
    }

    public function config_smarty()
    {
        $atual = get_class($this);
        $singleClassName = str_replace('App\\Controllers','',$atual);
        $this->template->template_dir = __APP_DIR . 'App/Views/'.$singleClassName.'';
        $this->template->compile_dir = LIBRARY_VENDOR . 'Smarty/Compilados/'.$singleClassName.'';
    }

    public function add($add,$value)
    {
        if ( $add != '' && $value != '' )
        {
            $this->template->assign($add,$value);
        }
    }
}