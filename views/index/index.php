<?php require 'views/header.php'; ?>
<?php
		$conn=mysql_connect("localhost","root","") or die("Khong ket noi duoc toi server");
		$db=mysql_selectdb("manga",$conn) or die("Khong ket noi duoc toi CSDL");
		mysql_query("SET NAMES utf8");
		$sql= $this->msg;
		$result=mysql_query($sql) or die("Loi truy van");
		echo("<!-- section infor --><section class='infor'><div class='container'>
			<!-- content --><div class='content' style='background-color:#fff;'>
			<div class='row' ><div class=''>
			<h3 class='col-md-offset-1' ><span></span>Truyện dịch mới cập nhập</h3></div>");
	
		$i=0;
		while($row=mysql_fetch_array($result)){
			$i++;
			
				echo("<!-- Item --><div class='col-md-2 col-md-offset-1'>
					<a href='info?id= $row[0]'><img class='img-responsive ' src='$row[avatar]' alt=''></a>
					<div class='text-center'><p class='sub-title'>$row[name]</p>
					</div></div> <!-- /.item -->");
				if($i%5==0)
					echo("</div> <!-- /.row -->");
			
			
		}
		echo("</div> <!-- /.content --></div> <!-- /.container -->	</section> <!-- /.section infor -->");
		mysql_close($conn);
?>
<?php require 'views/footer.php'; ?>