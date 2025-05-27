<?php $title = "Post"?>
<?php
use Formation\PixoraPhp\Model\User;
?>
<?php ob_start(); ?>
    <a href="deconnexion" class="connection">Deconnexion</a>
    <a href="home">Home <i class="fa-solid fa-check"></i></a>
<?php $nav = ob_get_clean(); ?>
<?php ob_start(); ?>
<main id="post">
    <section id="createPost">
        <h1>Nouveau Post ?</h1>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="file-upload">
            <label for="imgVideo">Vidéos ou Images</label>
            <div class="upload-box">
                <label for="imgVideo">Importe ton fichier ici</label>
                <input type="file" id="imgVideo" name="imgVideo" accept="image/*,video/*">
            </div>
            <p>Taille (30 MB max)</p>
            </div>
            <div class="description">
                <label for="content">Description</label>
                <input type="text" id="content" name="content" placeholder="Ajoute une description">
            </div>
            <input type="submit" value="Publier">
        </form>
         <?=$postSend?> 
    </section>
    <section id="ourPost">
        <?php
        foreach($getAllPost as $post){
            $getUser = new User();
            $getUserPost=$getUser->getUser($post["id_user"]);
            echo '
            <article>
                <div id="headerDiv">
                    <div>
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSuZeWBpFS1Le6TfHoBzN2OBuPIvKUGBSdo2A&s" alt="">
                        <div>
                            <h2>'.$getUserPost[0]["pseudo"].'</h2>
                            <span>'.$getUserPost[0]["identifiant"].'</span>
                        </div>
                    </div>
                    <i class="fa-solid fa-ellipsis-vertical"></i>
                </div>
                <p>'.$post["content"].'</p>
                <img src="'.$post["imgVideo"].'" alt="">
                <div id="footerDiv">
                    <div><i class="fa-regular fa-heart"></i><i class="fa-solid fa-heart"></i>69</div>
                    <div><i class="fa-regular fa-comment"></i> 69</div>
                    <div><i class="fa-regular fa-bookmark"></i><i class="fa-solid fa-bookmark"></i> 69</div>
                    <div><i class="fa-solid fa-share"></i> 69</div>
                    <div>
                        <span><i class="fa-solid fa-trash"></i></span>
                        <!-- <span>Modifier<i class="fa-solid fa-check"></i></span> -->
                    </div>
                </div>
            </article>
            ';
        }
        ?>
    </section>
</main>
<?php $content = ob_get_clean(); ?>
<?php require_once 'src/view/template.php'?>
