<?php $title = "Inscription"?>
<?php ob_start(); ?>
<main class="zf inscription">
    <a href="./index.html">index</a>
    <a href="./home.html">home</a>
    <section id="sectionText">
        <a href="index.html"><img src="IMG/image (1).png" alt="Logo Pixora" /></a>

        <div>
            <h1 class="title">Bienvenue</h1>
            <p>Inscrit toi pour profiter dès maintenant et rejoins l’Pixora !</p>
        </div>
    </section>

    <!-- Section 100vh -->
    <section id="sectionForm">
        <h2>S'inscrire</h2>
        <form>
            <div>
                <label for="name">Nom d’utilisateur</label>
                <input type="text" name="name" id="name" required minlength="4" maxlength="20" placeholder="Entre un nom d’utilisateur" />

                <label for="email">Adresse mail</label>
                <input type="email" name="email" id="email" required minlength="4" maxlength="20" placeholder="Entre ton adresse mail" />

                <label for="mdp">Mot de passe</label>
                <input type="password" name="mdp" id="mdp" required minlength="8" maxlength="20" placeholder="Entre ton mot de passe" />

                <label for="mdpConfirm">Entrer à nouveau ton mot de passe</label>
                <input type="password" name="mdpConfirm" id="mdpConfirm" required minlength="8" maxlength="20" placeholder="Entre à nouveau ton mot de passe" />

                <div class="center">
                    <input type="checkbox" />
                    <a href="#">J’accepte les <span class="redColor">conditions d’utilisations</span></a>
                </div>
            </div>

            <div>
                <button type="submit">S’inscrire</button>
                <a href="./login.html" class="textAlign">J’ai déjà un compte ? <span class="redColor"> Connexion</span></a>
            </div>
        </form>
    </section>
</main>
<?php $content = ob_get_clean(); ?>
<?php require_once 'src/view/template.php'?>

