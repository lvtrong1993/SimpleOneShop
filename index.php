<?php
	
	require_once 'define.php';

	function __autoload($clasName){
		require_once LIBRARY_PATH . "{$clasName}.php";
		// require_once LIBRARY_PATH .'Bootstrap.php';
		// require_once LIBRARY_PATH .'Controller.php';
		// require_once LIBRARY_PATH .'Model.php';
		// require_once LIBRARY_PATH .'View.php';
	}
	//$cc= "Test ex";

	$bootstrap = new Bootstrap();
	$bootstrap->init();
	//echo $bootstrap->cc;