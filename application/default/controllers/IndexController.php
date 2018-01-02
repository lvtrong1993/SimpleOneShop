<?php
class IndexController extends Controller{
	
	public function __construct(){//$arrParams
		// parent::__construct($arrParams);
		// $this->_templateObj->setFolderTemplate('default/main/');
		// $this->_templateObj->setFileTemplate('index.php');
		// $this->_templateObj->setFileConfig('template.ini');
		// $this->_templateObj->load();
		parent::__construct();
		// echo '<h3>' . __METHOD__ . '</h3>';
	}
	
	public function indexAction(){
		// echo '<h3>' . __METHOD__ . '</h3>';
		// $this->loadModel('admin', 'index');
		// echo "<pre>";
		// print_r($this);
		// echo "</pre>";

			// echo '<h3>' . __METHOD__ . '</h3>';
	//	$this->loadModel('admin', 'index');
		$this->_view->data="dkm";
		$this->_view->render( 'index/index');
	}
	
}