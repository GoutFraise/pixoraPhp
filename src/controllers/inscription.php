<?php
namespace Formation\PixoraPhp\Controllers;
use Application\Model\User\User;
class Inscription{
    private function sanitize($str) {
        $str = htmlspecialchars($str);
        $str = trim($str);
        $str = stripslashes($str);
        return $str;
    }
    public function execute()
    {
        require_once 'src/view/inscription.php';
    }
}
