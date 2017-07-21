<?php

/*	-------------------------------
	PARAMETRES DE CONNEXION BDD
-------------------------------  */

// Adresse du serveur de BdD
$host     = "127.0.0.1";

// Nom de l'utilisateur de la BdD
$user     = "root";

// MdP associé à l'utilisateur
$pass     = "";

// Nom de la BdD sur laquelle on veut travailler
$database = "foodtrucks";

/*	--------------
	CONSTANTES
--------------  */

// Execution mode
define("MODE", "dev"); // dev || prod

// Directories
define("VIEWS_DIECTORY", "../private/views/");

// Default page
define("DEFAULT_PAGE", "home");

// 	------------------------
// 	VARIABLES PAR DÉFAUT
//  ------------------------  

// $default_page = "home";