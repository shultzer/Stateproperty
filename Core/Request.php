<?php
    namespace Core;

    use App\MainController;

    class Request
    {

        public static function getmethod (){
            return strtoupper($_SERVER['REQUEST_METHOD']);
        }
        public static function getpath (){
            $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

            return strtolower(trim($path, '/'));
        }
    }