<?php
/* Base Controller
*Loads the Models and Views
*/

class Controller {
	//Load Models
	
	public function model($model){
		//Require Model File
		require_once '../Gearbox/Boiler/Models/' . $model . '.php';
		
		// Instatiate a Model
		return new $model();
	}
	
	// Load View
	public function view($view, $data = []){
		// Checking For View File Exist
		if(file_exists('../Gearbox/Boiler/Views/' . $view . '.php')){
			require_once '../Gearbox/Boiler/Views/' . $view . '.php';
		}else{
			//Required View Does Not Exist
			die('View does not exist');
		}
			
		}
	}
	





?>