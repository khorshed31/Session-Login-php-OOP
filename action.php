<?php
session_start();

require_once 'vendor/autoload.php';
use App\classes\Home;
use App\classes\PrimeNumber;
use App\classes\Register;
use App\classes\Auth;

if (isset($_GET['pages'])){
    if ($_GET['pages'] == 'home'){

        if (isset($_SESSION['id'])){
            include 'pages/home.php';
        }
        else{
            $auth = new Auth();
            $auth->login();
        }
    }
    elseif ($_GET['pages'] == 'series'){

        if (isset($_SESSION['id'])){
            include 'pages/series.php';
        }
        else{
            $auth = new Auth();
            $auth->login();
        }
    }
    elseif ($_GET['pages'] == 'register'){

        if (isset($_SESSION['id'])){
            include 'pages/register.php';
        }
        else{
            $auth = new Auth();
            $auth->login();
        }
    }
    elseif ($_GET['pages'] == 'login'){

        if (isset($_SESSION['id'])){
            $home = new Home();
            $home->index();
        }
        else{

            include 'pages/login.php';
        }
    }
    elseif ($_GET['pages'] == 'logout'){

        $auth = new Auth();
        $auth->logout();
    }
    elseif ($_GET['pages'] == 'all-data'){

            $register = new Register();
            $result = $register->allData();
            echo '<pre>';
            print_r($result);
    }
    else{
        if (isset($_SESSION['id'])){
            $home = new Home();
            $home->index();
        }
        else{
            $auth = new Auth();
            $auth->login();
        }
    }
}
elseif (isset($_POST['btn'])){

    $prime = new PrimeNumber($_POST);
    $result = $prime->primeNumber();
    include 'pages/home.php';
}
elseif (isset($_POST['series_btn'])){

    $series = new Home($_POST);
    $result = $series->sumSeries();
    include 'pages/series.php';
}
elseif (isset($_POST['reg_btn'])){

    $register = new Register($_POST);
    $message = $register->add();
    include 'pages/register.php';
}
elseif (isset($_POST['login_btn'])){

    $auth = new Auth($_POST);
    $message = $auth->verify();
    include 'pages/login.php';
}
else{

    header('Location: index.php');
}
