<!DOCTYPE html>
<html>
<head>
	
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	
	<title></title>
	
	<link type="text/css" rel="stylesheet" href="plugins/css/bootstrap.min.css">
	<link type="text/css" rel="stylesheet" href="plugins/css/styles.css">
	<link rel="stylesheet" href="plugins/fonts/font-awesome/css/font-awesome.min.css">
</head>
<body>

	<div id='cssmenu'>
		<ul>
		   <li class=''><a href='#'><span>MangaView</span></a></li>
		   <li><a href='#'><span>Liên hệ quảng cáo</span></a></li>
		   <li><a href='#'><span data-toggle="modal"  data-target="#model-linkdie">Báo link die</span></a></li>
		   <li class=' has-sub'><a href='#'><span>Danh sách truyện</span></a>
			  <ul>
				<li class=''><a href='index?type=Comedy'><span>Hài kịch</span></a></li>
				 <li class=''><a href='index?type=Action'><span>Hành động</span></a></li>
				 <li class=''><a href='index?type=SchoolLife'><span>Đời sống học đường</span></a></li>
				 <li class=''><a href='index?type=All'><span>Xem tất cả</span></a></li>
			  </ul>
		   </li>
		   
		   <li class='last'><a href='#'><span>Forum</span></a></li>
		   
		   <!-- Modal login-->
			<div class="modal fade" id="model-linkdie" tabindex="-1" role="dialog" aria-labelledby="ModalLinkdie" aria-hidden="true">
			  <div class="modal-dialog">
				<div class="modal-content">
				  <div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="ModalLinkdie">Báo link die</h4>
				  </div>
				  <div class="modal-body">
				  
					<form name="login-form" action="" method="post"class="form-horizontal">
					<!-- Username-->
					  <div class="form-group">
						<label  class="col-sm-2 control-label">URL</label>
						<div class="col-sm-9">
						  <input type="text" class="form-control" id="URL" placeholder="URL">
						</div>
						</div>
						
					<br/>
					<!-- Password-->
					  <div class="form-group">
						<label for="nd" class="col-sm-2 control-label">Nội dung</label>
						<div class="col-sm-9">
						  <textarea class="form-control" id="nd" rows="3"></textarea>
						</div>
					  </div>
					  
					</form>	
					
				  </div>
				  <div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Submit Now</button>
				  </div>
				</div>
			  </div>
			</div>
		   
		</ul>
	
	</div>
	
	