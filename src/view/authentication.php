<?php
require_once "models/autoload.php";
?>
<!DOCTYPE html>

<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="public/css/mystyle.css" />
    <title>Creation compte</title>
</head>

<body>

    <header class="topbar">
        <h3>banque du peuple</h3>
    </header>
    <div class="logobanque">
        <img src="C:\Users\Mor DIOP\Desktop\simpl\TP2\logobanque.png" alt="logo de la banque">
    </div>
    <article>
        <form action="auto" id="authentification">

            <label for="loginauto"></label>
            <input type="text" id="loginauto">
            <label for="passwordauto"></label>
            <input type="text" id="passwordnauto">
            <button>Connexion</button>
        </form>
    </article>

    <script src="bpauto.js"></script>
</body>

</html>