<?php
	
	
	$conn=mysql_connect("localhost","root","") or die("Khong ket noi duoc toi server");
	$db=mysql_selectdb("manga",$conn) or die("Khong ket noi duoc toi CSDL");
	mysql_query("SET NAMES utf8");
	
	
	$namemg=$_POST['name1'];
			  
	mkdir( "plugins/images/$namemg");
	
	$path = "plugins/images/$namemg/";
	$tmp_name = $_FILES['file']['tmp_name'];
	$name = $_FILES['file']['name'];
	$type = $_FILES['file']['type']; 
	$size = $_FILES['file']['size']; 
	move_uploaded_file($tmp_name,$path.$name);
			
	
	$typemg=$_POST['type'];
	$author=$_POST['author'];
	$status=$_POST['status'];
	$present=$_POST['present'];
	$avatar =  "plugins/images/$namemg/$namemg.png";
	
	
	
	
	
	$sql = "insert into manga(name,type,avatar,author,status,present) values('$namemg','$typemg','$avatar','$author','$status','$present')";
	$result=mysql_query($sql);
	header('location:admin');



?>