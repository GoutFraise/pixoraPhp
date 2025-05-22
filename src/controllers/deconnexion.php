<?php
namespace Formation\PixoraPhp\Controllers;

class Deconnexion{
    public function execute()
    {
        session_destroy();
        header("Location: connexion");
        exit();
    }
}
