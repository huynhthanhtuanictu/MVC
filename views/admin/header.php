<!DOCTYPE html>
<html>
<head>
	
	<meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <meta name='description' content=''>
    <meta name='author' content=''>
	<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
	
	<title></title>
	
	<link type='text/css' rel='stylesheet' href='plugins/css/bootstrap.min.css'>
	<link type='text/css' rel='stylesheet' href='plugins/css/styles.css'>
	<link rel='stylesheet' href='plugins/fonts/font-awesome/css/font-awesome.min.css'>
</head>
<body>


	<div id='cssmenu'>
		<ul>
		   <li class=''><a href='#'><span>MangaView</span></a></li>
		   <li><a href='' data-toggle='modal' data-target='#modaladdchap'><span>Thêm chương</span></a></li>
		   <li><a href='' data-toggle='modal' data-target='#modaladdmanga'><span>Thêm truyện</span></a></li>
		   <li class=' has-sub'><a href='#'><span>Danh sách truyện</span></a>
			  <ul>
				 <li class=''><a href='index?type=Comedy'><span>Hài kịch</span></a></li>
				 <li class=''><a href='index?type=Action'><span>Hành động</span></a></li>
				 <li class=''><a href='index?type=SchoolLife'><span>Đời sống học đường</span></a></li>
				 <li class=''><a href='index?type=All'><span>Xem tất cả</span></a></li>
			  </ul>
		   </li>
		   
		   <li class='last'><a href='#'><span>Diễn đàn</span></a></li>
		
			
		<!-- Modal -->
		<form action='addmanga.php' method='post' enctype='multipart/form-data' class='form-horizontal'>
			<div class='modal fade' id='modaladdmanga' tabindex='-1' role='dialog' '>
			  <div class='modal-dialog modal-lg' role='document'>
				<div class='modal-content'>
				  <div class='modal-header'>
					<button type='button' class='close' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
					<h4 class='modal-title' id='myModalLabel'>Thêm truyện mới</h4>
				  </div>
				  <div class='modal-body'>
					
					
					
					
					<!-- -->
					  <div class='form-group'>
						<label  class='col-sm-2 control-label'>Tên truyện</label>
						<div class='col-sm-8'>
						  <input type='text'  name='name1' class='form-control'  placeholder='Tên truyện'>
						</div>
						</div>
						
					<br/>
					<!-- -->
					  <div class='form-group'>
						<label  class='col-sm-2 control-label'>Thể loại</label>
						<div class='col-sm-8'>
						  <input type='text' name='type' class='form-control'  placeholder='Loại truyện'>
						</div>
						</div>
						
					<br/>
					 
					 <!-- -->
					  <div class='form-group'>
						<label for='nd' class='col-sm-2 control-label'>Ảnh</label>
						<div class='col-sm-8'>
						  <input type='file' name='file' size='20' />
						</div>
					 </div>
					 
					 <br/>
					 <!-- -->
					  <div class='form-group'>
						<label  class='col-sm-2 control-label'>Trạng thái</label>
						<div class='col-sm-8'>
						  <input type='text' name='status' class='form-control'  placeholder='Loại truyện'>
						</div>
						</div>
						
					<br/>
					
					<!-- -->
					  <div class='form-group'>
						<label  class='col-sm-2 control-label'>Tác giả</label>
						<div class='col-sm-8'>
						  <input type='text' name='author' class='form-control'  placeholder='Tác giả'>
						</div>
						</div>
						
					<br/>
					
					<!-- -->
					  <div class='form-group'>
						<label  class='col-sm-2 control-label'>Giới thiệu</label>
						<div class='col-sm-8'>
						  <input type='text' name='present' class='form-control'  placeholder='Loại truyện'>
						</div>
						</div>
						
					<br/>
					
					
					
					
					
				  </div>
				  <div class='modal-footer'>
					<button type='button' class='btn btn-default' data-dismiss='modal'>Hủy</button>
					<input type='submit' value='Tải lên' name='ok'  class='btn btn-primary'/>
				  </div>
				</div>
			  </div>
			</div>
		</form>	
		<!-- Modal -->
			
			
			
		<!-- Modal -->
		<form action='addchap.php' method='post' enctype='multipart/form-data' class='form-horizontal'>
			<div class='modal fade' id='modaladdchap' tabindex='-1' role='dialog' '>
			  <div class='modal-dialog modal-lg' role='document'>
				<div class='modal-content'>
				  <div class='modal-header'>
					<button type='button' class='close' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
					<h4 class='modal-title' id='myModalLabel'>Thêm chương mới</h4>
				  </div>
				  <div class='modal-body'>
					
					
					
					
					<!-- -->
					  <div class='form-group'>
						<label  class='col-sm-2 control-label'>Tên truyện</label>
						<div class='col-sm-8'>
						  <input type='text' name='namemg' class='form-control'  placeholder='Tên truyện'>
						</div>
						</div>
						
					<br/>
					
					
					<!-- -->
					  <div class='form-group'>
						<label  class='col-sm-2 control-label'>ID Truyện</label>
						<div class='col-sm-8'>
						  <input type='text' name='idmanga' class='form-control'  placeholder='ID Truyện'>
						</div>
						</div>
						
					<br/>
					
					
					<!-- -->
					  <div class='form-group'>
						<label  class='col-sm-2 control-label'>Tên chương</label>
						<div class='col-sm-8'>
						  <input type='text'  name='namechap' class='form-control'  placeholder='Tên chương'>
						</div>
						</div>
						
					<br/>
					
					 
					 <!-- -->
					  <div class='form-group'>
						<label class='col-sm-2 control-label'>Ảnh</label>
						<div class='col-sm-8'>
						  <input type='file' name='file' size='20' />
						</div>
					 </div>
					 <br/>
					 
					 <!-- -->
					  <div class='form-group'>
						<label  class='col-sm-2 control-label'>Số trang</label>
						<div class='col-sm-8'>
						  <input type='text' name='totalpage' class='form-control'  placeholder='Số trang'>
						</div>
						</div>
						
					<br/>
					
					
					
	
					
					
					
				  </div>
				  <div class='modal-footer'>
					<button type='button' class='btn btn-default' data-dismiss='modal'>Hủy</button>
					<input type='submit' value='Tải lên' name='ok'  class='btn btn-primary'/>
				  </div>
				</div>
			  </div>
			</div>
		</form>	
		<!-- Modal -->
			
		   
		</ul>
	
	</div>
	
	