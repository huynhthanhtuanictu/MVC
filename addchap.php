<?php
	
	
	$conn=mysql_connect("localhost","root","") or die("Khong ket noi duoc toi server");
	$db=mysql_selectdb("manga",$conn) or die("Khong ket noi duoc toi CSDL");
	mysql_query("SET NAMES utf8");
	
	
	$namechap=$_POST['namechap'];
	$namemg=$_POST['namemg'];
	$totalpage=$_POST['totalpage'];
	$idmanga=$_POST['idmanga'];
			  
	mkdir( "plugins/images/$namemg/$namechap");
	
	$path = "plugins/images/$namemg/$namechap/";
	$tmp_name = $_FILES['file']['tmp_name'];
	$name = $_FILES['file']['name'];
	$type = $_FILES['file']['type']; 
	$size = $_FILES['file']['size']; 
	move_uploaded_file($tmp_name,$path.$name);
			
	
	
	
	$url =  "plugins/images/$namemg/$namechap";
	
	
	
	
	
	$sql = "insert into chap(name,totalpage,idmanga,url) values('$namechap','$totalpage','$idmanga','$url')";
	$result=mysql_query($sql);
	header('location:admin');



?>