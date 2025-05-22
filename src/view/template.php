<!doctype html>
<html lang="fr">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Document</title>
		<meta name="description" content="..." />
		<meta name="author" content="Maxime Germis" />
        <link rel="icon" type="image/png" sizes="76x76" href="..." />
		<link rel="stylesheet" href="./public/CSS/var.css" />
		<link rel="stylesheet" href="./public/CSS/style.css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
		<link rel="preconnect" href="https://fonts.googleapis.com" />
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
		<link
			href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Raleway:ital,wght@0,100..900;1,100..900&family=Urbanist:ital,wght@0,100..900;1,100..900&display=swap"
			rel="stylesheet"
		/>
		<script src="./public/JS/script.js" defer></script>
	</head>

	<body id="index">
		<header>
			<div class="logo">
				<i class="fa-solid fa-p"></i>
				<h1>Pixora</h1>
			</div>
			<div class="recherche">
				<i class="fa-solid fa-magnifying-glass"></i>
				<input type="text" placeholder="Recherche">
			</div>
			<div>
				<a href="connexion" class="connection">connection <i class="fa-solid fa-check"></i></a>
				<a href="inscription">inscription <i class="fa-solid fa-check"></i></a>
			</div>
		</header>
            <?= $content ?>
		<footer>
			<span><i class="fa-regular fa-copyright"> pixora</i></span>
			<div>
				<a href="#">Mention legales</a>
				<a href="#">Condition d'utilisation</a>
				<a href="#">Coordonées</a>
				<a href="#">Langues</a>
			</div>
		</footer>
		<script>
			window.addEventListener('load', () => {
				if ('serviceWorker' in navigator) {
					navigator.serviceWorker.register('service-worker.js');
				}
			});
		</script>
	</body>
</html>
