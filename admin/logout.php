<?php 
	session_start();
	session_destroy();

	//header("location:index.php");
	echo"<meta http-equiv='refresh' content='0; url=index.php'>";
?>