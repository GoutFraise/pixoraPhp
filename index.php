<?php
session_start();
require_once 'src/controllers/connexion.php';
require_once 'vendor/autoload.php';
use Formation\PixoraPhp\Controllers\Inscription;
use Formation\PixoraPhp\Controllers\Connexion;
use Formation\PixoraPhp\Controllers\Home;

try {
    if (isset($_GET['action']) && $_GET['action'] !== '') {
        if ($_GET['action'] === 'inscription') {
            (new Inscription())->execute();
        }
        elseif ($_GET['action'] === 'connexion') {
            (new Connexion())->execute();
        }
        elseif ($_GET['action'] === 'home') {
            (new Home())->execute();
        }
    }else {
        (new Connexion())->execute();
    }
} catch (Exception $e) {
    $errorMessage = $e->getMessage();
    require_once 'view/error.php';
}