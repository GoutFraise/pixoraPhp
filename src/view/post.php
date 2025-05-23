<?php $title = "Home"?>
<?php ob_start(); ?>
<h1>Recommandation</h1>
<h2>Abonnement</h2>
<?php $titleTop = ob_get_clean(); ?>
<?php ob_start(); ?>
<main id="post">
    <a href="deconnexion">deco</a>
    <section class="createPost">

    </section>
    <section class="ourPost">
        
    </section>
    <a href="home">home</a>
</main>
<?php $content = ob_get_clean(); ?>
<?php require_once 'src/view/template.php'?>
