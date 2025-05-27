<?php
namespace Formation\PixoraPhp\Controllers;
use Formation\PixoraPhp\Model\Post;
class Publish{
    public function execute()
    {
        if(isset($_POST["content"])&& isset($_FILES["imgVideo"]))
        {
            if(!empty($_POST['content']) && preg_match("/^\w{0,50}$/",$_POST["content"])
            && !empty($_FILES["imgVideo"]) && $_FILES['imgVideo']['error'] == UPLOAD_ERR_OK){
                $uploadDir = 'uploads/'.$_SESSION["Id"].'/';
                if (!file_exists($uploadDir)) {
                    mkdir($uploadDir, 0777, true); // Créer le dossier avec les permissions appropriées
                }
                $uploadFile = $uploadDir . basename($_FILES['imgVideo']['name']);
                 // Vérifiez si le fichier est une image
                $imageFileType = strtolower(pathinfo($uploadFile, PATHINFO_EXTENSION));
                $allowedTypes = array('jpg', 'jpeg', 'png', 'gif');
                
                if (in_array($imageFileType, $allowedTypes)) {
                    if (move_uploaded_file($_FILES['imgVideo']['tmp_name'], $uploadFile)) {
                        // Stockez le chemin du fichier dans la base de données
                        $filePath = $uploadFile;
                        echo "File uploaded: " . $filePath;

                        $post = new Post();
                        $postSend=$post->addPost($_POST['content'], $filePath, $_SESSION["Id"]);
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
            $postSend="frmulaire pas rempli coreectement";
        }
        require_once 'src/view/publish.php';
    }
}
