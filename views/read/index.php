<?php require 'views/header.php'; ?>
<?php
		$conn=mysql_connect("localhost","root","") or die("Khong ket noi duoc toi server");
		$db=mysql_selectdb("manga",$conn) or die("Khong ket noi duoc toi CSDL");
		mysql_query("SET NAMES utf8");
		$sql= $this->msg;
		$result=mysql_query($sql) or die("Loi truy van");
		echo("<!-- section infor --><section class='infor'><div class='container'><!-- content --><div class='content' >");
		
		while($row=mysql_fetch_array($result)){
			
			for($i=1;$i<=$row['totalpage'];$i++){
					echo("<img class='img-responsive' src='$row[url]/$i.png' alt=''>");
			}

			
		}
		
	
		echo("</div> <!-- /.content --></div> <!-- /.container --></section> <!-- /.section infor -->");
		
		mysql_close($conn);
?>
<?php require 'views/footer.php'; ?>