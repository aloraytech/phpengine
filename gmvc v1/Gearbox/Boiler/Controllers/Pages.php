<?php
	class Pages extends Controller {
		public function __construct(){

		}
		public function index(){
			$this->view('Pages/index', ['title' => 'Welcome']);
		}
		
		public function about($id){
			echo $id;
		}
		
	}
	
?>