<?php

class Model {

	function __construct() {
		$conn=mysql_connect("localhost","root","") or die("Khong ket noi duoc toi server");
		$db=mysql_selectdb("manga",$conn) or die("Khong ket noi duoc toi CSDL");
	}

}