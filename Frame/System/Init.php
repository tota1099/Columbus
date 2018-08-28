<?php

namespace Frame\System;

class Init
{
    private $routes;
    private $controllerDefault = __CONTROLLER_DEFAULT;
    private $methodDefault = __METHOD_DEFAULT;
    private $routeVarsDefault = __ROUTEVARS_DEFAULT;

    public function __construct()
    {
        $this->run($this->getUrl());
    }

    protected function run($url)
    {
        $class = "";
        $method = "";
        $routeVars = array();
        $url = explode('/',$url);
        $url = array_filter($url);

        if ( array_key_exists(0, $url) ) {
            $class = "App\\Controllers\\".ucfirst($url[0]);
            unset($url[0]);
        }

        if ( array_key_exists(1, $url) ) {
            $method = ucfirst($url[1]);
            unset($url[1]);
        }

        if ( empty($class) ) {
            $class = "App\\Controllers\\".ucfirst($this->controllerDefault);
        }

        if ( class_exists($class) === false) {
            die('Algum erro aconteceu!! Contacte o administrador. #errorControl');
        }

        if ( empty($method) ) {
            $method = $this->methodDefault;
        }

        if ( array_key_exists(2, $url) ) {
            foreach($url as $val) {
                $routeVars[] = $val;
            }
        } else if ( !empty($this->routeVarsDefault) ) {
            $routerVarsArray = explode('/', $this->routeVarsDefault);
            foreach($routerVarsArray as $val) {
                $routeVars[] = $val;
            }
        }

        $controller = new $class($routeVars);

        if ( method_exists($class, $method) === false) {
            die('Algum erro aconteceu!! Contacte o administrador. #errorMethod');
        }
        $controller->$method();
    }

    protected function setRoutes(array $routes)
    {
        $this->routes = $routes;
    }

    protected function getUrl()
    {
        $url =  parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH );
        $url = trim($url, '/');
        return $url;
    }
}