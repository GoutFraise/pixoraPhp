<?php
namespace Formation\PixoraPhp\Controllers;
use Formation\PixoraPhp\Model\User;
use Formation\PixoraPhp\Model\Post;

class Home{
    public function execute()
    {
        $getpost = new Post();
        $getAllPost=$getpost->allPost();
        require_once 'src/view/home.php';
    }
}
