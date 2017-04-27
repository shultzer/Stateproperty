<?php
    namespace Core;

   use App\MainController;

    class Router
    {

        public static $routes=[
            'GET' => [
                        'header'=>'App\MainController@index',
                        ''=>'App\MainController@index',
                        'insertletter'=>'App\InsertController@index',
                        'show'=>'App\ShowController@index'
                     ],
            'POST'=>[
                        'login'=>'LoginController@login',
                        'insertletter'=>'InsertController@insertletter',
                        'insertorder'=> 'InsertController@insertorder',
                        'insertreport'=>'InsertController@insertreport'

            ]
        ];
        public static function init () {
        $router = new static;

        return $router;

        }
        public function getpage (){
            $path = Request::getPath();
            $method = Request::getMethod();

            if(array_key_exists($path, static::$routes[$method])) {
                $controller = explode('@', static::$routes[$method][$path]);
                $this->callController(...$controller);
                return static::$routes[$method][$path];
            }else{
                header('HTTP/1.1 404 Not Found');
               include "views/error/404.php";
            }
        }


        private function callController($controller, $method){

            $controller = new $controller;

            $controller->$method();

        }
    }