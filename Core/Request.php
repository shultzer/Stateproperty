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
        function isPost()
        {
            return $_SERVER['REQUEST_METHOD'] == 'POST';
        }

        function getRequest($key, $default=0)
        {
            return (! empty($_REQUEST[$key]) ) ? $_REQUEST[$key] : $default;
        }


        function goBack()
        {
            $url = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'http://localhost/property/header.php';

            header("Location: $url");
        }
    }