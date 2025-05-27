<?php
namespace Formation\PixoraPhp\Controllers;
use Formation\PixoraPhp\Model\User;
class Connexion{
    private function sanitize($str) {
        $str = htmlspecialchars($str);
        $str = trim($str);
        $str = stripslashes($str);
        return $str;
    }
    public function execute()
    {
        if(isset($_POST["mail"])&& isset($_POST["password"]))
        {
            if(!empty($_POST['mail']) && preg_match("/^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$/",$_POST["mail"])
            && !empty($_POST['password'])
            // && preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*+-?&])[A-Za-z\d@$!%*+-?&]{8,}$/',$_POST["password"])
            ){
                $_POST['mail']= $this->sanitize($_POST['mail']);
                $_POST['password']= $this->sanitize($_POST['password']);
                $alluser = new User();
                $getAllUser= $alluser->isUser();
                foreach ($getAllUser as $user) {
                    if($_POST["mail"]===$user["mail"] && (password_verify($_POST['password'], $user["password"]))){
                        $_SESSION["User"]=$user["identifiant"];
                        $_SESSION["Id"]=$user["id_user"];
                        header("Location: index");
                    }
                }
            }
        }
        require_once 'src/view/connexion.php';
    }
}
