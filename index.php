<?php
	//Voir les erreurs
	ini_set('display_errors', 'On');
	error_reporting(E_ALL | E_STRICT);

	// Répertoire racine du MVC
	$rootDirectory = dirname(__FILE__)."/mvc/";

	// URI de la racine du MVC ( sans la query string )
	$rootURI = explode("index.php" , $_SERVER['REQUEST_URI'])[0];

	// chargement de la classe Autoload pour autochargement des classes
	require_once($rootDirectory.'Config/Autoload.php');

	session_start();

	try {
		Autoload::load();
	} catch(Exception $e){
		require (Config::getVues()["default"]) ;
	}

	if(empty($_SESSION['email'])) {
      header("Location:./mvc/Vue/vueConnexion.php");
    } else {
	  header("Location:./mvc/Vue/vueAccueil.php");
    }

?>
