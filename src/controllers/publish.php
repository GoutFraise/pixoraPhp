<?php
namespace Formation\PixoraPhp\Controllers;
use Formation\PixoraPhp\Model\Post;
use Formation\PixoraPhp\Model\User;
class Publish{
    private function sanitize($str) {
        $str = htmlspecialchars($str);
        $str = trim($str);
        $str = stripslashes($str);
        return $str;
    }
    public function execute()
    {
        if(isset($_POST["content"])&& isset($_FILES["imgVideo"]))
        {
            if(!empty($_POST['content']) && preg_match("/^[\w\s'-]{0,50}$/",$_POST["content"])
            && !empty($_FILES["imgVideo"]) && $_FILES['imgVideo']['error'] == UPLOAD_ERR_OK){

                $_POST['content']= $this->sanitize($_POST['content']);
                $uploadDir = 'uploads/'.$_SESSION["Id"].'/';

                if (!file_exists($uploadDir)) {
                    mkdir($uploadDir, 0777, true);
                }
                $uploadFile = $uploadDir . basename($_FILES['imgVideo']['name']);

                $imageFileType = strtolower(pathinfo($uploadFile, PATHINFO_EXTENSION));
                $allowedTypes = array('jpg', 'jpeg', 'png', 'gif');
                
                if (in_array($imageFileType, $allowedTypes)) {
                    if (move_uploaded_file($_FILES['imgVideo']['tmp_name'], $uploadFile)) {
                        $post = new Post();
                        $postSend=$post->addPost($_POST['content'], $uploadFile, $_SESSION["Id"]);
                    } else {
                        $postSend= "Error uploading file.";
                    }
                } else {
                    $postSend= "Only JPG, JPEG, PNG, and GIF files are allowed.";
                }
            }
            else{
                $postSend="No file uploaded or an error occurred.";;
            }
        }
        else{
            $postSend="formulaire pas rempli correctement";
        }
        $getpost = new Post();
        $getAllPost=$getpost->postFromUser($_SESSION["Id"]);
        require_once 'src/view/publish.php';
    }
}
