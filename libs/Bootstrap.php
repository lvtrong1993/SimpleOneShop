<?php
class Bootstrap{
	
	private $_params;
	private $_controllerObject;
	
	// public $cc="áds";

	public function __construct(){
		//echo $this->cc;
		$params 	= 	array_merge($_GET, $_POST);
		$module 	= 	isset($params['module'])? $params['module'] : DEFAULT_MODULE;
		// echo DEFAULT_MODULE;
		$controller = 	isset($params['controller'])? $params['controller'] : DEFAULT_CONTROLLER;
		$action 	= 	isset($params['action'])? $params['action'] : DEFAULT_ACTION;
		$controllerName =ucfirst($controller).'Controller';
		$filePath = APPLICATION_PATH.$module.DS.'controllers'.DS.$controllerName.'.php';
		if(file_exists($filePath)){
			require_once $filePath;
			$controllerObject = new $controllerName();
			$actionName= $action.'Action';
			$controllerObject->loadModel($module, $controller);

			
			if(method_exists($controllerObject, $actionName)==true){
				$controllerObject->$actionName();
				//echo 'co dung dan';
			}else{
				$this->_error();
			}
		}else{
			// không tồn tại đường dẫn đúng
			$this->_error();
		}
		// echo "<pre>";
		// print_r($params);
		// echo "</pre>";
		
	}
	public function init(){
		
	}
	public function _error(){
		require_once APPLICATION_PATH.'default'.DS.'controllers'.DS . 'ErrorController.php';
		$error = new ErrorController();
		$error->indexAction();
		//$error->index();
	}
	

}