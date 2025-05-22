<?php $title = "Inscription"?>
<?php ob_start(); ?>
<main class="zf login">
    <!-- Section 100vh -->
    <section id="sectionForm">
        <h2>Connexion</h2>
        <form>
            <div>
                <label for="email">Adresse mail</label>
                <input type="email" name="email" id="email" required minlength="4" maxlength="20" placeholder="Entre ton adresse mail" />

                <label for="mdp">Mot de passe</label>
                <input type="password" name="mdp" id="mdp" required minlength="8" maxlength="20" placeholder="Entre ton mot de passe" />

                <div class="spaceBeetween">
                    <div class="center">
                        <input type="checkbox" id="checkBoxLogin" />
                        <label for="checkBoxLogin">Rester connecter ?</label>
                    </div>
                    <a href="#" class="redColor">Mot de passe oublié ?</a>
                </div>
            </div>
            <div>
                <button type="submit">Se connecter</button>
                <div class="loginPlateform center">
                    <button id="loginGoogle">
                        <img src="./IMG/flat-color-icons_google.png" alt="logo google" />
                        <span>Connexion Google</span>
                    </button>
                    <button id="loginMeta">
                        <img src="./IMG/logos_meta-icon.png" alt="logo meta" />
                        <span>Connexion Meta</span>
                    </button>
                </div>
            </div>
            <a href="./inscription.html" class="textAlign">Je n’ai pas de compte ? <span class="redColor">Inscription</span></a>
        </form>
    </section>

    <section id="sectionText">
        <a href="index.html"><img src="IMG/image.png" alt="Logo Pixora" /></a>

        <div>
            <h1 class="title">Connexion</h1>
            <p>Connecte toi pour et retrouve notre communauté.</p>
        </div>
    </section>
</main>
<?php $content = ob_get_clean(); ?>
<?php require_once 'src/view/template.php'?>

