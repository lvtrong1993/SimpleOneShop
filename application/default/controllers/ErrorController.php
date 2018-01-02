<?php
class ErrorController extends Controller{
	public function __construct(){
		parent::__construct();
		// echo '<h3> This is a Error message from ' . __FILE__ . '</h3>'; 

	}
	public function indexAction(){
		$this->_view->data = "This is error";
		// echo "<pre>";
		// print_r($this);
		// echo "</pre>";
		$this->_view->render('error/index');
	}
	
	

}