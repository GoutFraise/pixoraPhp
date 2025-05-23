<?php
namespace Formation\PixoraPhp\Controllers;
use Formation\PixoraPhp\Model\Post;

class Publish{
    public function execute()
    {
        var_dump($_POST);
        var_dump($_SESSION);
        if(isset($_POST["content"])&& isset($_POST["imgVideo"]))
        {
            if(!empty($_POST['content']) && preg_match("/^\w{0,50}$/",$_POST["content"])
            && !empty($_POST['imgVideo'])){
                $post = new Post();
                $postSend=$post->addPost($_POST['content'], $_POST['imgVideo'], $_SESSION["Id"]);
            }
            else{
                $postSend="ne respect pas regex";
            }
            // if($postSend==="Nouveau post créé avec succès"){
            // }
        }
        else{
            $postSend="frmulaire pas rempli coreectement";
        }
        require_once 'src/view/publish.php';
    }
}
