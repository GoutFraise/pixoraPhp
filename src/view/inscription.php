<?php $title = "Inscription" ?>
<?php ob_start(); ?>
<main id="inscription">
    <div>
        <img src="./public/IMG/logo.png" alt="Logo de caliend">
        <div>
            <h1>Bienvenue</h1>
            <p>Inscrit toi maintenant et rejoins Caliend ! 

            </p>
            <a href="home">home <?=$register?></a>
        </div>
    </div>
    <section>
        <h2>S'inscrire</h2>
        <form action="" method="post">
            <div>
                <label for="pseudo">Nom d'utilisateur</label>
                <input type="text" name="pseudo" id="pseudo" placeholder="Entre un Nom d'utilisateur">
            </div>
            <div>
                <label for="identifiant">Identifiant</label>
                <input type="text" name="identifiant" id="identifiant" placeholder="Entre un identifiant">
            </div>
            <div>
                <label for="mail">Adresse mail</label>
                <input type="mail" name="mail" id="mail" placeholder="Entre une adresse mail">
            </div>
            <div>
                <label for="password">Mot de passe avec 1 majuscule 1 minuscule 1 chifrre 1 caractere special et au minimun 8 caractere</label>
                <input type="password" name="password" id="password" placeholder="Entre un mot de passe">
            </div>
            <div>
                <label for="verifPassword">Entrer à nouveau votre mot de passe</label>
                <input type="password" name="verifPassword" id="verifPassword" placeholder="Entrer à nouveau votre mot de passe">
            </div>
            <input type="submit" >
        </form>
        <p>j'ai déjà un compte ? <a href="./connexion">Connexion</a></p>
    </section>
</main>
<?php $content = ob_get_clean(); ?>
<?php require_once 'src/view/templateInsCon.php'?>
