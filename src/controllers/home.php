<?php
namespace Formation\PixoraPhp\Controllers;

class Home{
    private function sanitize($str) {
        $str = htmlspecialchars($str);
        $str = trim($str);
        $str = stripslashes($str);
        return $str;
    }
    public function execute()
    {
        require_once 'src/view/home.php';
    }
}
