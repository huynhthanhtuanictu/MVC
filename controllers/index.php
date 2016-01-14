<?php

class Index extends Controller {

	function __construct() {
		parent::__construct();
		
		
		
		
		if(isset($_GET['type'])){
			
			$type= $_GET['type'];
			if($type=='All'){
				$this->view->msg="select manga.* from manga ";
			}else{
				$this->view->msg="select manga.* from manga where type = '$type'";
			}
			
		}else{
			$this->view->msg="select manga.* from manga,chap where manga.idmanga = chap.idmanga order by idchap desc";
		}
		$this->view->render('index/index');
	}
	
	public function other($arg = false) {
		$this->view->msg="select manga.* from manga";
		$this->view->render('index/index');
	}
	

}