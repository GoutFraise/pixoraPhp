<?php $title = "Post"?>
<?php ob_start(); ?>
    <a href="deconnexion" class="connection">Deconnexion</a>
    <a href="home">Home <i class="fa-solid fa-check"></i></a>
<?php $nav = ob_get_clean(); ?>
<?php ob_start(); ?>
<main id="post">
    <section id="createPost">
        <h1>Nouveau Post ?</h1>
        <form action="" method="post" >
            <div>
                <label for="imgVideo">Image ou video</label>
                <input type="file" id="imgVideo" name="imgVideo" >
            </div>
            <div>
                <label for="content">Description</label>
                <input type="text" id="content" name="content" placeholder="Ajoute une description">
            </div>
            <input type="submit">
        </form>
        <?=$postSend?>
    </section>
    <section id="ourPost">
        <article>
            <div id="headerDiv">
                <div>
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSuZeWBpFS1Le6TfHoBzN2OBuPIvKUGBSdo2A&s" alt="">
                    <div>
                        <h2>Nom/Pseudo</h2>
                        <span>Identifiant</span>
                    </div>
                </div>
                <i class="fa-solid fa-ellipsis-vertical"></i>
            </div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, libero provident? Delectus, necessitatibus. Recusandae reiciendis consequuntur fuga sequi veniam voluptates ipsum distinctio, quam labore odit iste aspernatur aut vel placeat.</p>
            <img src="./public/IMG/castex.jpg" alt="">
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
        <article>
            <div id="headerDiv">
                <div>
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSuZeWBpFS1Le6TfHoBzN2OBuPIvKUGBSdo2A&s" alt="">
                    <div>
                        <h2>Nom/Pseudo</h2>
                        <span>Identifiant</span>
                    </div>
                </div>
                <i class="fa-solid fa-ellipsis-vertical"></i>
            </div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, libero provident? Delectus, necessitatibus. Recusandae reiciendis consequuntur fuga sequi veniam voluptates ipsum distinctio, quam labore odit iste aspernatur aut vel placeat.</p>
            <img src="./public/IMG/castex.jpg" alt="">
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
        <article>
            <div id="headerDiv">
                <div>
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSuZeWBpFS1Le6TfHoBzN2OBuPIvKUGBSdo2A&s" alt="">
                    <div>
                        <h2>Nom/Pseudo</h2>
                        <span>Identifiant</span>
                    </div>
                </div>
                <i class="fa-solid fa-ellipsis-vertical"></i>
            </div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, libero provident? Delectus, necessitatibus. Recusandae reiciendis consequuntur fuga sequi veniam voluptates ipsum distinctio, quam labore odit iste aspernatur aut vel placeat.</p>
            <img src="./public/IMG/castex.jpg" alt="">
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
    </section>
</main>
<?php $content = ob_get_clean(); ?>
<?php require_once 'src/view/template.php'?>
