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
                $alluser = new User();
                $getAllUser= $alluser->isUser();
                foreach ($getAllUser as $user) {
                    if($_POST["mail"]===$user["mail"] && (password_verify($_POST['password'], $user["password"]))){
                        $_SESSION["User"]=$user["identifiant"];
                        header("Location: index");
                    }
                }
                // if (password_verify($_POST['password'], $hash)) { 
                //      // Success!
                // } else { 
                //     // Invalid credentials 
                // }

            }
            
        }
        
        
        require_once 'src/view/connexion.php';
    }
}
