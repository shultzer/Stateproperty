<?php
    namespace App;

    class MainController
    {
        public function index (){
            $db = new \mysqli('localhost', 'root', '', 'property') or die('error');
            if (!$db) {
                die("Connection failed: " . mysqli_connect_error());
            }
            $sql ='SELECT * FROM Uniqueorders ORDER BY ordersnum';

            require "views/header.php";
            include "views/body.php";

        }


    }