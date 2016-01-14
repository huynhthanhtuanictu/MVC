<?php

class Deletemg extends Controller {

	function __construct() {
		parent::__construct();
		
		
		
		if(isset($_GET['idmanga'])){
			$id = $_GET['idmanga'];
			$conn=mysql_connect("localhost","root","") or die("Khong ket noi duoc toi server");
			$db=mysql_selectdb("manga",$conn) or die("Khong ket noi duoc toi CSDL");
			$sql= "delete from manga where idmanga = '$id' ";
			mysql_query($sql)or die("Loi truy van 1 ");
			mysql_close($conn);
			header('location:admin');
			
		}
		if(isset($_GET['idchap'])){
			$id = $_GET['idchap'];
			$conn=mysql_connect("localhost","root","") or die("Khong ket noi duoc toi server");
			$db=mysql_selectdb("manga",$conn) or die("Khong ket noi duoc toi CSDL");
			$sql= "delete from chap where idchap = '$id' ";
			mysql_query($sql)or die("Loi truy van 2");
			mysql_close($conn);
			header('location:admin');
		}
		
	}
	
	

}