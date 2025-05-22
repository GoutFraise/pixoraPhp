<?php
namespace Formation\PixoraPhp\Controllers;
use Formation\PixoraPhp\Model\User;
class Inscription{
    private function sanitize($str) {
        $str = htmlspecialchars($str);
        $str = trim($str);
        $str = stripslashes($str);
        return $str;
    }
    public function execute()
    {
        if(isset($_POST["pseudo"]) 
        && isset($_POST["identifiant"])  
        && isset($_POST["mail"]) 
        && isset($_POST["password"])
        && isset($_POST["verifPassword"])
        && $_POST['verifPassword']===$_POST['password'])
        {

            if(!empty($_POST['pseudo']) && preg_match("/^\w{0,50}$/",$_POST["pseudo"])
            &&  !empty($_POST['identifiant']) && preg_match("/^\w{0,50}$/",$_POST["identifiant"])
            && !empty($_POST['mail']) && preg_match("/^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$/",$_POST["mail"])
            && !empty($_POST['password'])&& preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*+-?&])[A-Za-z\d@$!%*+-?&]{8,}$/',$_POST["password"])){
                $_POST['pseudo']= $this->sanitize($_POST['pseudo']);
                $_POST['identifiant']= $this->sanitize($_POST['identifiant']);
                $_POST['mail']= $this->sanitize($_POST['mail']);
                $_POST['password']= $this->sanitize($_POST['password']);
                $newUser = new User();
                $register = $newUser->addUser($_POST['pseudo'],$_POST['identifiant'],$_POST['mail'],password_hash($_POST['password'] , PASSWORD_DEFAULT));
            }
            else{
                $register =  "champ pas rempli ou ne respectant les condition";
            }
            if($register==="Nouvel enregistrement créé avec succès"){
                header("Location: index");
            }
        }
        else{
            $register =  "post pas defini";
        }
        require_once 'src/view/inscription.php';
    }
}
