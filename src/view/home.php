<?php $title = "Home"?>
<?php 
use Formation\PixoraPhp\Model\User;
?>
<?php ob_start(); ?>
<!-- <a href="connexion" class="connection">connection <i class="fa-solid fa-check"></i></a>
<a href="inscription">inscription <i class="fa-solid fa-check"></i></a> -->
<a href="deconnexion" class="connection">Deconnexion</a>
<a href="post">Post<i class="fa-solid fa-check"></i></a>
<?php $nav = ob_get_clean(); ?>
<?php ob_start(); ?>

<main id="home">
    <section id="listPost">
        <div class="filtre">
            <span>Trier par</span>
            <div class="filtreboutton">
                <button>Abonnement <i class="fa-solid fa-star"></i></button>
                <button>A-Z <i class="fa-solid fa-user"></i></button>
                <button>Dates <i class="fa-solid fa-clock"></i></button>
            
            </div>
        </div>
        <div class="listarticle">
            <?php
             foreach($getAllPost as $post){
                if($post["image"]!==null){
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
                        <img src="'.$post["image"].'" alt="">
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
                    </article>';
                }
                else if($post["video"]!==null){
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
                        <video  controls>
                            <source src="'.$post["video"].'" type="video/mp4">
                            Votre navigateur ne supporte pas la balise vidéo.
                        </video>
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
                    </article>';
                }
            }
            ?>
        </div>
    </section>
</main>
<?php $content = ob_get_clean(); ?>
<?php require_once 'src/view/template.php'?>
