<?php	
	require_once 'config/database.php';
	require_once 'functions.php';
	session_start();

	if ($_POST['pseudo'] == $_SESSION['pseudo'] and $_POST['pass'] == '') {
		$_SESSION['ERROR_MESSAGE'] = '<div id="error">Remplissez les champs pour modifier votre profil.</div>';
	}
	else if (($_POST['pass'] == '' && $_POST['pass-bis'] != '') || ($_POST['pass'] != '' && $_POST['pass-bis'] == '') ) {
		$_SESSION['ERROR_MESSAGE'] = '<div id="error">Pour changer le mot de passe, veuillez renseigner les 2 champs.</div>';
	}
	else if ($_POST['pseudo'] != $_SESSION['pseudo'] && $_POST['pass'] == '') {
		checkModifPseudo($bdd, $_POST['pseudo']);
		//$_SESSION['SUCCESS_MESSAGE'] = '<div id="success">Votre pseudo a été mis à jour.</div>';
	}
	else {
		$_SESSION['SUCCESS_MESSAGE'] = '<div id="success">Votre profil a été mis à jour.</div>';
	}

	header('Location: profil.php');

?>