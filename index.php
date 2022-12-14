<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Page de connexion</title>
    <link rel="stylesheet" href="css/connexion_style.css">
</head>

<body>

<!-- HEADER -->
<header></header>

<!-- MAIN -->
<main>
    <div id="connexion">
        <div class="container">
            <h2>Connectez-vous</h2>
            <br>
            <p>Authentifiez-vous avec Mon Identifiant SNCF</p>
            <br>
            <form action= "php/envoieConnexion.php" method= "post">
                E-mail : <input type="email" name="email" value="<?php echo $email=""?>" /> <br/>
                Mot de passe : <input type="password" name="pwd" value="<?php echo $pwd="" ?>" /> <br/>
                <button type="submit">Valider</button>
            </form>
            <p><a href="inscription.php">Je n'ai pas encore de compte.</a></p>
        </div>
    </div>
</main>

<!-- FOOTER -->
<footer></footer>

<script src="js/headerFooter.js"></script>

</body>
</html>