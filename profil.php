<?php

    require_once 'functions.php';
    require_once 'config/database.php';
    session_start();

    // error_reporting(E_ALL);
    // ini_set('display_errors', 1);

    if (!isset($_SESSION['pseudo'])) {
        header('Location: index.php?page=1');
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
                <form method="post" action="traitement_profil.php">
					<label for="pseudo" > Nouveau Pseudo </label>
					<input type="text" name="pseudo" id="pseudo" value="<?php echo $_SESSION['pseudo'] ?>" autofocus  />
					<br /><br />
					<label for="pass"> Nouveau Mot de passe </label>
					<input type="password" name="pass" id="pass" />
					<br /><br />
					<label for="pass"> Confirmer Mot de passe </label>
					<input type="password" name="pass-bis" id="pass-bis" />
					<br /><br />
					<input type="submit" value="ENVOYER" />    
                </form>
            </div>

        </div>
         
        <?php require_once 'footer.php'; ?>

    </body>
</html>