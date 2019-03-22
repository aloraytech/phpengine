<?php

/*
* App Core Class
* Creates URL & Loads Core Controller
* URL FORMAT - 	/controller/method/params
*/

class Core {
	
	protected $currentController = 'Pages';
	protected $currentMethod = 'index';
	protected $params = [];

	public function __construct(){
		
		// print_r ($this->getUrl());
		$url = $this->getUrl();
		
		// Look in controllers for first Value
		// Load Controller From URL
		
		if(file_exists('../Gearbox/Boiler/Controllers/' . ucwords($url[0]). '.php')){
		// If exists, set as current controller
		$this->currentController = ucwords($url[0]);
		
		// Unset 0 Index
		unset($url[0]);
		
		}
		
		//Require the controller
		
		require_once '../Gearbox/Boiler/Controllers/' . $this->currentController . '.php';
		
		//Instantiate Controller
		
		$this->currentController = new $this->currentController;
		
		// Load Controller END
		// Load Methods From URL
		// Check for second part in the url
		
		if(isset($url[1])){
			// check to see if method exists in controller
			if(method_exists($this->currentController, $url[1])){
				$this->currentMethod = $url[1];
				
		// Unset 1 Index
		unset($url[1]);
		
			}
		}
		
		//Load Params
		$this->params = $url ? array_values($url) : [];
		
		// Call a Callback with array of params
		call_user_func_array([$this->currentController,$this->currentMethod], $this->params);
		
	}
	
	// Class End
	public function getUrl(){
		if(isset($_GET['url'])){
			$url = rtrim($_GET['url'], '/');
			$url = filter_var($url, FILTER_SANITIZE_URL);
			$url = explode('/', $url);
			return $url;
		}
	}
}
/* Class Core End Here */




?>