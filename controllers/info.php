<?php

class Info extends Controller {

	function __construct() {
		parent::__construct();
		
		if(isset($_GET['id'])){
			$id= $_GET['id'];
			$this->view->msg="select manga.* from manga where idmanga = '$id'";
			$this->view->msg1="select chap.* from chap where idmanga = '$id'";
		}
		$this->view->render('info/index');
	}
	
	
	

}