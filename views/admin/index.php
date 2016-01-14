<?php require 'views/admin/header.php'; ?>
<?php

	$conn=mysql_connect("localhost","root","") or die("Khong ket noi duoc toi server");
	$db=mysql_selectdb("manga",$conn) or die("Khong ket noi duoc toi CSDL");
	mysql_query("SET NAMES utf8");
	$sql= $this->msg;
	$result=mysql_query($sql) or die("Loi truy van");
	echo("<!-- section infor --><section class='infor'><div class='container'><!-- content -->");
	echo("<table class='table table-striped'><tr><th>Id</th><th>Tên truyện</th><th>Tác giả</th><th>Trạng thái</th>
		<th>Xóa</th></tr>");
	while($row=mysql_fetch_array($result)){
		echo("<tr><td>$row[idmanga]</td><td>$row[name]</td>
		<td>$row[author]</td><td>$row[status]</td>
		<td><a href='deletemg?idmanga=$row[idmanga]'>Delete</a></td></tr>");
			
	}
	echo("</table>");
	echo("</div> <!-- /.content --></div> <!-- /.container -->	</section> <!-- /.section infor -->");
	mysql_close($conn);
	
	
	$conn=mysql_connect("localhost","root","") or die("Khong ket noi duoc toi server");
	$db=mysql_selectdb("manga",$conn) or die("Khong ket noi duoc toi CSDL");
	mysql_query("SET NAMES utf8");
	$sql= $this->msg1;
	$result=mysql_query($sql) or die("Loi truy van");
	echo("<!-- section infor --><section class='infor'><div class='container'><!-- content -->");
	echo("<table class='table table-striped'><tr><th>Id chương</th><th>Id truyện</th><th>Tên chương</th><th>Số trang</th>
		<th>Xóa</th></tr>");
	while($row=mysql_fetch_array($result)){
		echo("<tr><td>$row[idchap]</td><td>$row[idmanga]</td>
		<td>$row[name]</td><td>$row[totalpage]</td>
		<td><a href='deletemg?idchap=$row[idchap]'>Delete</a></td></tr>");
			
	}
	echo("</table>");
	echo("</div> <!-- /.content --></div> <!-- /.container -->	</section> <!-- /.section infor -->");
	mysql_close($conn);
?>

<?php require 'views/footer.php'; ?>