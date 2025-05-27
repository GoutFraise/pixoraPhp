<?php
namespace Formation\PixoraPhp\Controllers;
use Formation\PixoraPhp\Model\User;
use Formation\PixoraPhp\Model\Post;

class Home{
    private function sanitize($str) {
        $str = htmlspecialchars($str);
        $str = trim($str);
        $str = stripslashes($str);
        return $str;
    }
    public function execute()
    {
        $getpost = new Post();
        $getAllPost=$getpost->allPost();
        require_once 'src/view/home.php';
    }
}
