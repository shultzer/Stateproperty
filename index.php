<?php
    use Core\Router;
    use App\MainController;
    use App\LoginController;

    require_once "Core/bootstrap.php";

    session_start();

    if (isset($_POST['logout'])){
        session_unset();
    }

    if (!App\LoginController::validate($_SESSION['login'], $_SESSION['pwd'])){
        require "views/login.php";
        exit();
    }

Router::init()->getpage();


