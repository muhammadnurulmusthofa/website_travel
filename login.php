<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "Login gagal.. email dan password salah!";
		}else if($_GET['pesan'] == "logout"){
			echo "Anda telah berhasil logout";
		}else if($_GET['pesan'] == "belum_login"){
			echo "Anda harus masuk login untuk mengakses halaman admin";
		}
	}
	?>


<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Form Login</title>
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css'><link rel="stylesheet" href="style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="container">
	<div id="login-box">
		<div class="logo">
			<img src="" class="img img-responsive img-circle center-block"/>
			<h1 class="logo-caption"><span class="tweak">L</span>ogin</h1>
		</div><!-- /.logo -->
		<div class="controls">
			<input type="text" name="username" placeholder="Username" class="form-control" />
			<input type="text" name="username" placeholder="Password" class="form-control" />
            <a href="index.html"><button type="button" class="btn btn-default btn-block btn-custom">Login</button></a>
			
	</div>
</div>
<div id="particles-js"></div>
<!-- partial -->
  <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css'></script>
  <script src='https://code.jquery.com/jquery-1.11.1.min.js'></script><script  src="script.js"></script>

</body>
</html>
