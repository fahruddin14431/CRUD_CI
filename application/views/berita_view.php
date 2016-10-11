<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Bootstrap 3.3.6 -->
	<link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>">
	<title>Demo CRUD CI</title>
</head>
<body>

<div class="container col-md-12">

	<h1>Demo CRUD Dengan Codeigniter</h1>
	
	<div class="panel panel-default">
		
		<div class="panel-heading">
			<h3 class="panel-tittle"><b><?php echo $header; ?></b></h3>
		</div>

		<!-- get content -->
		<?php 

			$this->load->view($konten);

		 ?>

</div>
<!-- end of panel -->

</div>
<!-- end of container -->
	
</body>
</html>

