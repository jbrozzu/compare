<?php
    require_once 'functions.php';
    session_start();

    if (isset($_SESSION['pseudo'])) {
        header('Location: index.php');
        die;
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="css/header.css" />
        <title> Camagru </title>
    </head>

    <body>
        <?php 
            LogMessage();
            require_once 'header.php'; 
         ?>
        
        <div class="corpus">
        
            <div class="form">
            <div id='title_forgot'>Réinitialisation du Mot de passe</div>
                <form method="post" action="traitement_forgot.php">
					<label for="pseudo"> Pseudo </label>
					<input type="text" name="pseudo" id="pseudo" autofocus required />
					<br />
					<label for="email"> Email </label>
					<input type="text" name="email" id="email" required />
					<br /><br />
					<input type="submit" value="ENVOYER" />     
                </form>
            </div>

        </div>
         
        <?php require_once 'footer.php'; ?>

    </body>
</html>