<?php

class Error extends Controller {

	function __construct() {
		parent::__construct();
		

		$this->view->msg = 'This page is an error';
		$this->view->render('error/index');
	}

}