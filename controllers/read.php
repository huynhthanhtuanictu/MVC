<?php

class Read extends Controller {

	function __construct() {
		parent::__construct();
		
		if(isset($_GET['id'])){
			$id= $_GET['id'];
			$this->view->msg="select chap.* from chap where idchap = '$id'";
		}
		$this->view->render('read/index');
	}
	
	

}