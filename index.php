<?php
session_start();
require_once 'vendor/autoload.php';
use Formation\PixoraPhp\Controllers\Inscription;
use Formation\PixoraPhp\Controllers\Connexion;
use Formation\PixoraPhp\Controllers\Home;
use Formation\PixoraPhp\Controllers\Deconnexion;
use Formation\PixoraPhp\Controllers\Publish;

try {
    if (isset($_GET['action']) && $_GET['action'] !== '') {
        if ($_GET['action'] === 'inscription') {
            if(isset($_SESSION["User"]) && $_SESSION["User"]!==null){
                header("Location: home");
            }
            else{
                (new Inscription())->execute();
            }
        }
        elseif ($_GET['action'] === 'connexion') {
            if(isset($_SESSION["User"]) && $_SESSION["User"]!==null){
                header("Location: home");
            }
            else{
                (new Connexion())->execute();
            }
        }
        elseif ($_GET['action'] === 'post') {
            if(isset($_SESSION["User"]) && $_SESSION["User"]!==null){
                (new Publish())->execute();
            }
            else{
                header("Location: connexion");
            }
        }
        elseif ($_GET['action'] === 'deconnexion') {
            (new Deconnexion())->execute();
        }
        elseif ($_GET['action'] === 'home') {
            if(isset($_SESSION["User"]) && $_SESSION["User"]!==null){
                (new Home())->execute();
            }
            else{
                header("Location: connexion");
            }
        }
    }else {
        header("Location: connexion");
    }
} 
catch (Exception $e) {
    $errorMessage = $e->getMessage();
    require_once 'src/view/error.php';
}