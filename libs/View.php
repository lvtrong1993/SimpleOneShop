<?php
class View{
	private $_moduleName;
	public function __construct($moduleName){
		$this->_moduleName = $moduleName;
			// echo '<h3>' . __METHOD__ . '</h3>';
	}

	public function render( $fileInclude){
		// EX: $path='application/default/views/user/index.php';
		 $path= APPLICATION_PATH.$this->_moduleName.DS.'views'.DS.$fileInclude.'.php';
		 if(file_exists($path)){

		 	require_once $path;

		 }else{
		 	echo"Error";
		 }

	}
/*
default
user/index*/

}