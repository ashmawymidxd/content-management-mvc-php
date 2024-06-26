<?php

namespace ahmed\core;

class app{

    private $controller;
    private $method;
    private $params = [];

    public function __construct(){
        $this->url();
        $this->render();
    }

    private function url(){
        if(!empty($_SERVER['QUERY_STRING'])){
            $url = $_SERVER['QUERY_STRING'];
            $url = explode('/', $url);

            $url2 = explode ('=', $url[0]);

            $this->controller = isset($url[0]) ? $url2[1] : 'home';
            $this->method = isset($url[1]) ? $url[1] : 'index';
            unset($url[0], $url[1]);
            $this->params = !empty($url) ? array_values($url) : [];
        }
    }

    private function render(){
        $controllerName = 'ahmed\\controllers\\'.ucfirst($this->controller).'Controller';
        // echo $controllerName;
        if(class_exists($controllerName)){
            $controller = new $controllerName;

            if(method_exists($controller, $this->method)){
                call_user_func_array([$controller, $this->method], $this->params);
            }else{
                echo "Method not found";
            }
        }else{
            echo "Class not found";
        }
    }

}
