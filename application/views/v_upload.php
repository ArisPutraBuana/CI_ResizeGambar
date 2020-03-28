<!DOCTYPE html>
<html>
<head>
	<title>Upload dan resize image</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.css'?>">
</head>
<body>
	<div class="container">
		<div class="col-sm-4 col-md-offset-4">
		<h4 class="py-4">Upload dan Resize image </h4>
			<form class="form-horizontal" action="<?php echo base_url().'index.php/upload/upload_image'?>" 
			method="post" enctype="multipart/form-data">

				<div class="form-group">
					<input type="text" name="xjudul" class="form-control" placeholder="Judul">
				</div>
				<div class="form-group">
					<input type="file" name="filefoto" class="form-file">
				</div>
				<div class="form-group">
					<button class="btn btn-primary" type="submit">Upload</button>
				</div>
			</form>	
		</div>
	</div>

	<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery-3.2.1.js'?>"></script>
	<script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>
</body>
</html>