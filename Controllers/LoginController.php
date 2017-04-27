<?php
    /**
     * Created by PhpStorm.
     * User: user
     * Date: 27.04.2017
     * Time: 16:15
     */

    namespace App;

    class LoginController
    {
        public static function validate($user, $pass) {


            $users=[
                'admin' => 'admin',
                'guest' => 'guest'
            ];

            if (isset($users[$user]) && ($users[$user] === $pass)) {
                return true;
            } else {
                return false;
            }
        }
        public static function login(){

            if (isset($_POST['username'])) {
                $user = $_POST['username'];
                $pwd = $_POST['password'];

                if (self::validate($user, $pwd)) {
                    $_SESSION['login'] = $_POST['username'];
                    $_SESSION['pwd'] = $_POST['password'];

                    header('Location: ');
                    exit();
                }
            }
        }
    }