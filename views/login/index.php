<!DOCTYPE html>
<html >
  <head>
    <meta charset='UTF-8'>
    <title>Log-in</title>
    
    
    
    <link rel='stylesheet prefetch' href='plugins/css/jquery-ui.css'>

        <link rel='stylesheet' href='plugins/css/login.css'>

    
    
    
  </head>

  <body>

    <div class='login-card'>
    <h1>Log-in</h1><br>
  <form >
    <input type='text' name='user' placeholder='Username'>
    <input type='password' name='pass' placeholder='Password'>
    <input type='submit' name='login' class='login login-submit' value='login'>
  </form>
 <?php
		$conn=mysql_connect("localhost","root","") or die("Khong ket noi duoc toi server");
		$db=mysql_selectdb("manga",$conn) or die("Khong ket noi duoc toi CSDL");
		mysql_query("SET NAMES utf8");
		$user = $_POST['user'];
		$pass = $_POST['pass'];
		$sql= "select manager.* from manager where name = 'admin'";
		$result=mysql_query($sql) or die("Loi truy van");
		while($row=mysql_fetch_array($result)){			
			if(($row['pass']==$pass)){
				$this->view->render('index/index');
			}else{ $this->view->render('error/index'); }
				
		}
		
 ?>
  
</div>


    <script src='plugins/js/jquery.min.js'></script>
	<script src='plugins/js/jquery-ui.min.js'></script>

    
    
    
    
  </body>
</html>
