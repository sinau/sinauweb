<?php
include "../config/connect.php"; 

/* tambah data */
if (isset($_POST['simpan'])) {

	$id = $_POST['id_opini'];
	$nama = $_POST['nama'];
	$opini = $_POST['opini'];
	
	$sumber = $_FILES['photo']['tmp_name'];  
	$target = $_FILES['photo']['name'];
	
	 move_uploaded_file($sumber,'images/admin/'.$target);
	
	mysql_query("insert into opini set id_opini = '$id',
								nama = '$nama',
								opini = '$opini',
								photo = '$target'") or die (mysql_error());
}

// hapus
$id = $_GET['id_opini'];
mysql_query("delete from opini where id_opini = '$id'");

// ubah
if (isset($_POST['ubah'])) {
	$id = $_POST['id_opini'];
	$nama = $_POST['nama'];
	$opini = $_POST['opini'];
	
	$sumber = $_FILES['photo']['tmp_name'];  
	$target = $_FILES['photo']['name'];
	
	 move_uploaded_file($sumber,'images/admin/'.$target);
	
	if (!empty($target)) {
	mysql_query("UPDATE opini set id_opini = '$id',
								nama = '$nama',
								opini = '$opini',
								photo = '$target' where id_opini = '$id'") or die (mysql_error());
	} elseif (empty($target)) {
	mysql_query("UPDATE opini set id_opini = '$id',
								nama = '$nama',
								opini = '$opini' where id_opini = '$id'") or die (mysql_error());
	}
	
}

//header('location:adm_opini');
echo"<meta http-equiv='refresh' content='0; url=adm_opini'>";

?>
