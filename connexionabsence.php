<?php

$id = $_POST['pseudo'];
$motdepasse = $_POST['password'];
$valid = true;

if(empty($id)){
		$valid = false;
				echo '<body onLoad="alert(\'Veuillez entrer votre identifiant!\')">';
		// puis on le redirige vers la page d'accueil
		echo '<meta http-equiv="refresh" content="0;URL=connexionabsence.html">';
	}
if(empty($motdepasse)){
		$valid = false;
				echo '<body onLoad="alert(\'Veuillez entrer votre mot de passe!\')">';
		// puis on le redirige vers la page d'accueil
		echo '<meta http-equiv="refresh" content="0;URL=connexionabsence.html">';
	}
if($id!="admin" && $motdepasse!="admin" ){
		$valid = false;
				echo '<body onLoad="alert(\'Informations de connexion incorrectes\')">';
		// puis on le redirige vers la page d'accueil
		echo '<meta http-equiv="refresh" content="0;URL=connexionabsence.html">';
	}

if($valid==true){header ('location: acc.php');
	}
?>