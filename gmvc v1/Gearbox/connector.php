<?php
// Load Configaration 
	require_once 'Config/Config.php';

// Load Configaration 
//	require_once 'Loader/AutoLoader.php';

	// Autoload System
	spl_autoload_register(function($className){
	require_once 'System/' . $className . '.php';
	});


	
	
	
	
	
	// Load System
	//require_once 'System/Core.php';
	//require_once 'System/Controller.php';
	//require_once 'System/Database.php';


?>







