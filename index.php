<!DOCTYPE html>
<html lang="id">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Crud Php Mysql dan Bootstrap PusatKursus.com</title>

		<!-- Bootstrap CSS -->
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
	</head>
	<body>
		<div class="container">
			<div class="panel panel-primary">
			  <div class="panel-heading">
					<h3 class="panel-title">Crud Data Siswa</h3>
			  </div>
			  <div class="panel-body">
					<?php 
						include 'koneksi.php';
						$module = isset($_GET['module']) ? $_GET['module'] : '';
						//jika ada request module maka tampilkan nilai modul + .php
						if ($module) {
							include "$module.php";
						//jika tidak maka home.php sebagai default
						}else{
							include "home.php";
						}
					?>
			  </div>
			</div>
		</div>
		
	</body>
</html>