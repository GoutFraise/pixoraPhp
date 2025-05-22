<?php $title = "Home"?>
<?php ob_start(); ?>
<h1>Recommandation</h1>
<h2>Abonnement</h2>
<?php $titleTop = ob_get_clean(); ?>
<?php ob_start(); ?>
<main id="home">
    <section class="container">
        <div class="filtre">
            <span>Trier par</span>
            <div class="filtreboutton">
                <button>Abonnement <i class="fa-solid fa-star"></i></button>
                <button>A-Z <i class="fa-solid fa-user"></i></button>
                <button>Dates <i class="fa-solid fa-clock"></i></button>
            
            </div>
        </div>
        <div class="listarticle">
            <article>
                <header>
                    <div>
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSuZeWBpFS1Le6TfHoBzN2OBuPIvKUGBSdo2A&s" alt="">
                        <div>
                            <h2>Nom/Pseudo</h2>
                            <span>Identifiant</span>
                        </div>
                    </div>
                    <i class="fa-solid fa-ellipsis-vertical"></i>
                </header>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, libero provident? Delectus, necessitatibus. Recusandae reiciendis consequuntur fuga sequi veniam voluptates ipsum distinctio, quam labore odit iste aspernatur aut vel placeat.</p>
                <img src="./public/IMG/castex.jpg" alt="">
                <footer>
                    <div><i class="fa-regular fa-heart"></i><i class="fa-solid fa-heart"></i>69</div>
                    <div><i class="fa-regular fa-comment"></i> 69</div>
                    <div><i class="fa-regular fa-bookmark"></i><i class="fa-solid fa-bookmark"></i> 69</div>
                    <div><i class="fa-solid fa-share"></i> 69</div>
                </footer>
            </article>
            <article>
                <header>
                    <div>
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSuZeWBpFS1Le6TfHoBzN2OBuPIvKUGBSdo2A&s" alt="">
                        <div>
                            <h2>Nom/Pseudo</h2>
                            <span>Identifiant</span>
                        </div>
                    </div>
                    <i class="fa-solid fa-ellipsis-vertical"></i>
                </header>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, libero provident? Delectus, necessitatibus. Recusandae reiciendis consequuntur fuga sequi veniam voluptates ipsum distinctio, quam labore odit iste aspernatur aut vel placeat.</p>
                <img src="./public/IMG/castex.jpg" alt="">
                <footer>
                    <div><i class="fa-regular fa-heart"></i><i class="fa-solid fa-heart"></i>69</div>
                    <div><i class="fa-regular fa-comment"></i> 69</div>
                    <div><i class="fa-regular fa-bookmark"></i><i class="fa-solid fa-bookmark"></i> 69</div>
                    <div><i class="fa-solid fa-share"></i> 69</div>
                </footer>
            </article>
            <article>
                <header>
                    <div>
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSuZeWBpFS1Le6TfHoBzN2OBuPIvKUGBSdo2A&s" alt="">
                        <div>
                            <h2>Nom/Pseudo</h2>
                            <span>Identifiant</span>
                        </div>
                    </div>
                    <i class="fa-solid fa-ellipsis-vertical"></i>
                </header>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, libero provident? Delectus, necessitatibus. Recusandae reiciendis consequuntur fuga sequi veniam voluptates ipsum distinctio, quam labore odit iste aspernatur aut vel placeat.</p>
                <img src="./public/IMG/castex.jpg" alt="">
                <footer>
                    <div><i class="fa-regular fa-heart"></i><i class="fa-solid fa-heart"></i>69</div>
                    <div><i class="fa-regular fa-comment"></i> 69</div>
                    <div><i class="fa-regular fa-bookmark"></i><i class="fa-solid fa-bookmark"></i> 69</div>
                    <div><i class="fa-solid fa-share"></i> 69</div>
                </footer>
            </article>
            <article>
                <header>
                    <div>
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSuZeWBpFS1Le6TfHoBzN2OBuPIvKUGBSdo2A&s" alt="">
                        <div>
                            <h2>Nom/Pseudo</h2>
                            <span>Identifiant</span>
                        </div>
                    </div>
                    <i class="fa-solid fa-ellipsis-vertical"></i>
                </header>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, libero provident? Delectus, necessitatibus. Recusandae reiciendis consequuntur fuga sequi veniam voluptates ipsum distinctio, quam labore odit iste aspernatur aut vel placeat.</p>
                <img src="./public/IMG/castex.jpg" alt="">
                <footer>
                    <div><i class="fa-regular fa-heart"></i><i class="fa-solid fa-heart"></i>69</div>
                    <div><i class="fa-regular fa-comment"></i> 69</div>
                    <div><i class="fa-regular fa-bookmark"></i><i class="fa-solid fa-bookmark"></i> 69</div>
                    <div><i class="fa-solid fa-share"></i> 69</div>
                </footer>
            </article>
        </div>
    </section>
</main>
<?php $content = ob_get_clean(); ?>
<?php require_once 'src/view/template.php'?>
