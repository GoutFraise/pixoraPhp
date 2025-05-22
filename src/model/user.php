<?php
namespace Formation\PixoraPhp\Model;
require_once 'src/lib/database.php';
use Formation\PixoraPhp\Lib\Database;
class User
{
    private Database $connexion;
    public function __construct()
    {
        $this->connexion = new Database();
    }
    public function addUser(string $pseudo, string $identifiant, string $mail,string $password)
    {
        $sql = "SELECT * FROM user ";
        $stmt = $this->connexion->getConnexion()->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        $loginTaken=false;
        $mailTaken=false;
        foreach ($result as $row) {
            if($row["identifiant"]===$identifiant){
                $loginTaken=true;
            }
            if($row["mail"]===$mail){
                $mailTaken=true;
            }
        }
        if(!$loginTaken && !$mailTaken){
            $sql = " INSERT INTO user (pseudo, identifiant, mail, password)
            VALUES (:pseudo, :identifiant, :mail, :password)";
            $stmt = $this->connexion->getConnexion()->prepare($sql);
            $stmt->bindParam(':pseudo', $pseudo);
            $stmt->bindParam(':identifiant', $identifiant);
            $stmt->bindParam(':mail', $mail);
            $stmt->bindParam(':password', $password);
            $stmt->execute();
            $register =  "Nouvel enregistrement créé avec succès";
            $_SESSION["User"]=$identifiant;
            return $register;
        }
        else{
            $_SESSION["User"]=null;
            if($loginTaken && $mailTaken){
                return "login et mail deja utiliser ";
            }
            else if($loginTaken){
                return "login  deja utiliser";
            }
            else{
                return "mail deja utiliser";
            }
        }
    }
    public function isUser(){
        $sql = "SELECT * FROM user ";
        $stmt = $this->connexion->getConnexion()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
}
