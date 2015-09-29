<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
    <title>Login Admin Sinau Academy</title>
	<link rel="shortcut icon" href="">
    
    <!-- Bootstrap core CSS -->



    
        <link rel="stylesheet" href="css/style.css">

    <script src="js/jquery.min.js"></script>
    
    
  </head>

  <body>

    <div class="wrapper">
	<div class="container">
		<h1>Halaman Admin</h1>
		<h2> SINAU ACADEMY </h2>
		
		<form class="form" action="" method="post">
			<input type="text" placeholder="Username" name="username">
			<input type="password" placeholder="Password" name="password">
			<button type="submit" id="login-button" name="ok"> Login </button>
		</form>
		
		<?php 
			include "../config/connect.php";
			if (isset($_POST['ok'])) {

				$user = $_POST['username'];
				$pass =($_POST['password']);

				$qry = "SELECT * from login where username='$user' and password = '$pass'";
				$sql = mysql_query($qry);
				$row = mysql_fetch_array($sql);

				$id_login = $row['id_login'];
				$nama = $row['nama'];
				$username = $row['username'];
				$password = $row['password'];
				$email = $row['email'];
				$photo = $row['photo'];

				if ($user == $username && $pass == $password) {
					$_SESSION['username'] = $username;
					$_SESSION['nama'] = $nama;
					$_SESSION['email'] = $email;
					$_SESSION['photo'] = $photo;

					//header("location:adm_home");
					echo"<meta http-equiv='refresh' content='0; url=adm_home'>";
				} else echo "<h4> Ups! Login Gagal. </h4>";
			} 
		?>
		

	</div>
	
	<ul class="bg-bubbles">
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
</div>
    
  </body>
</html>
