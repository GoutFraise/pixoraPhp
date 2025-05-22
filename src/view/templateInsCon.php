<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Caliend réseaux social avec des évènement" />
    <meta name="author" content="Morgan Achard"/>
    <link rel="manifest" href="manifest.json">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="./public/css/style.css">
    <link rel="stylesheet" href="./public/css/var.css">
    <link rel="icon" type="image/png" sizes="76x76" href="./public/image/logoprojet.png" />
    <script src="public/js/function.js"></script>
    <script src="public/js/script.js" defer></script>
    <title><?= $title ?></title>
</head>
<body id="InsCon">
    <?= $content ?>
    <script>
        window.addEventListener("load", () => {
            if ("serviceWorker" in navigator) {
                navigator.serviceWorker.register("service-worker.js");
            }
        });
    </script>
</body>
</html>
