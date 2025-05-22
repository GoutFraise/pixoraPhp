<?php $title = "Connexion" ?>
<?php ob_start(); ?>
<main id="connexion">
    <section>
        <h2>Connexion</h2>
        <form action="" method="post">
            <div>
                <label for="mail">Adresse mail</label>
                <input type="mail" name="mail" id="mail" placeholder="Entre une adresse mail">
            </div>
            <div>
                <label for="password">Mot de passe</label>
                <input type="password" name="password" id="password" placeholder="Entre un mot de passe">
            </div>
            <input type="submit" value="Se connecter">
        </form>
        <p>je n'ai pas de compte ? <a href="./inscription">Inscription</a></p>
    </section>
    <div>
        <img src="./public/IMG/logo.png" alt="Logo de caliend">
        <div>
            <h1>Caliend</h1>
            <p>
                Connecte toi et retrouve notre communauté
            </p>
        </div>
    </div>
</main>
<?php $content = ob_get_clean(); ?>
<?php require_once 'src/view/templateInsCon.php'?>
