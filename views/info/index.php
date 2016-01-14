<?php require 'views/header.php'; ?>
<?php
		$conn=mysql_connect("localhost","root","") or die("Khong ket noi duoc toi server");
		$db=mysql_selectdb("manga",$conn) or die("Khong ket noi duoc toi CSDL");
		mysql_query("SET NAMES utf8");
		$sql= $this->msg;
		$result=mysql_query($sql) or die("Loi truy van");
		echo("<!-- section infor --><section class='infor'><div class='container'><!-- content -->
			<div class='content' ><div class='row'><div class='col-md-3 col-md-offset-1'>");
	
		$i=0;
		while($row=mysql_fetch_array($result)){
			$i++;
				echo("<a href='#'><img class='img-responsive' src='$row[avatar]' alt=''></a></div>");
				echo("<div class='col-md-7'>
						<h4>Tên truyện : </h4><p>$row[name]</p>
						<h4>Thể loại : </h4><p>$row[type]</p>
						<h4>Tác giả : </h4><p>$row[author]</p>
						<h4>Trạng thái : </h4><p>$row[status]</p>
						<h4>Giới thiệu : </h4><p><p>$row[present]</p>");
				
				
			
			
		}
		
		$sql= $this->msg1;
		$result=mysql_query($sql) or die("Loi truy van");
		
		while($row=mysql_fetch_array($result)){
			
				echo("<a href='read?id=$row[idchap]'><p style='text-decoration:none;'>Chương $row[name]</p></a></div>");

		}
		echo("</div> <!-- /.content --></div> <!-- /.container --></section> <!-- /.section infor -->");
		
		mysql_close($conn);
?>
<?php require 'views/footer.php'; ?>