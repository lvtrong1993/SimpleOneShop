<?php
class IndexController extends Controller{
	public function __construct(){
	echo '<h3>' . __METHOD__ . '</h3>';
	}
	
	public function indexAction(){
		echo '<h3>' . __METHOD__ . '</h3>';
		// $this->loadModel('admin', 'index');
		// echo "<pre>";
		// print_r($this->db);
		// echo "</pre>";
		//$this->db->listItems();
	}
	
	public function addAction(){
		echo '<h3>' . __METHOD__ . '</h3>';
		//$this->_view->render('index/index');
	}
}