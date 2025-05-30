<?php
namespace Formation\PixoraPhp\Model;
use Formation\PixoraPhp\Lib\Database;
class Post
{
    private Database $connexion;
    public function __construct()
    {
        $this->connexion = new Database();
    }
    public function addPost(string $content,  $image , $video, string $id_user,)
    {
        $sql = " INSERT INTO post (content, image, video ,id_user)
        VALUES (:content, :image ,:video , :id_user)";
        $stmt = $this->connexion->getConnexion()->prepare($sql);
        $stmt->bindParam(':content', $content);
        $stmt->bindParam(':image', $image);
        $stmt->bindParam(':video', $video);
        $stmt->bindParam(':id_user', $id_user);
        $stmt->execute();
        return "Nouveau post créé avec succès";
    }
    public function postFromUser($iduser){
        $sql = "SELECT * FROM post WHERE id_user=$iduser";
        $stmt = $this->connexion->getConnexion()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
    public function allPost(){
        $sql = "SELECT * FROM post";
        $stmt = $this->connexion->getConnexion()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
}

