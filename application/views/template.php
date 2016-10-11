<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>

	<!-- <h1><?php echo $data_dari_model['judul']; ?></h1>
	<p><?php echo $data_dari_model['isi']; ?></p> -->

	<?php foreach ($data_dari_model as $value) {
			echo "<h1>".$value['judul']."<h1>";
	} ?>
	
</body>
</html>