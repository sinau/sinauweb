<?php
include "../config/connect.php"; 

//if (isset($_POST['simpan'])) {

	//$judul = $_POST['judul'];
	//$pra = $_POST['prakata'];
	
	//mysql_query("insert into profil set prakata = '$pra',
	//									judul_profil = '$judul'") 
	//	or die (mysql_error());
//}

//$id_profil = $_GET['id_profil'];
//mysql_query("delete from profil where id_profil = '$id_profil'");


if (isset($_POST['ubah'])) {
	
	$id_profil = $_POST['id_profil'];
	$judul = $_POST['judul'];
	$pra = $_POST['prakata'];

	
	mysql_query("UPDATE profil set judul_profil = '$judul',
									prakata = '$pra'
									where id_profil='$id_profil'") 
		or die (mysql_error());
}

//header('location:adm_profil');
echo"<meta http-equiv='refresh' content='0; url=adm_profil'>";


?>
