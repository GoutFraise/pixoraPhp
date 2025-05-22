<?php
namespace Formation\PixoraPhp\Controllers;
class Connexion{
    private function sanitize($str) {
        $str = htmlspecialchars($str);
        $str = trim($str);
        $str = stripslashes($str);
        return $str;
    }
    public function execute()
    {
        require_once 'src/view/connexion.php';
    }
}
