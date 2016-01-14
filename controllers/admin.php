<?php

class Admin extends Controller {

	function __construct() {
		parent::__construct();
		
		$this->view->msg="select manga.* from manga ";
		$this->view->msg1="select chap.* from chap ";
		$this->view->render('admin/index');
		
	}
	
	

}