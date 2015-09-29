<?php
include "../config/connect.php"; 

/* tambah data */
if (isset($_POST['simpan'])) {

	$id = $_POST['id_news'];
	$tgl = $_POST['tanggal'];
	$jdl = $_POST['judul'];
	$rngksn = $_POST['ringkasan'];
	$news = $_POST['news'];
	
	$sumber = $_FILES['gambar_news']['tmp_name'];  
	$target = $_FILES['gambar_news']['name'];
	
	 move_uploaded_file($sumber,'images/news/'.$target);
	
	mysql_query("insert into news set id_news = '$id',
								tanggal = '$tgl',
								judul = '$jdl',
								ringkasan = '$rngksn',
								news = '$news',
								gambar_news = '$target'") or die (mysql_error());
}

// hapus
$id = $_GET['id_news'];
mysql_query("delete from news where id_news = '$id'");

// ubah
if (isset($_POST['ubah'])) {
	$id = $_POST['id_news'];
	$tgl = $_POST['tanggal'];
	$jdl = $_POST['judul'];
	$rngksn = $_POST['ringkasan'];
	$news = $_POST['news'];
	
	$sumber = $_FILES['gambar_news']['tmp_name'];  
	$target = $_FILES['gambar_news']['name'];
	
	 move_uploaded_file($sumber,'images/news/'.$target);
	
	if (!empty($target)) {
	mysql_query("UPDATE news set id_news = '$id',
								tanggal = '$tgl',
								judul = '$jdl',
								ringkasan = '$rngksn',
								news = '$news',
								gambar_news = '$target' where id_news = '$id'") or die (mysql_error());
	} elseif (empty($target)) {
	mysql_query("UPDATE news set id_news = '$id',
								tanggal = '$tgl',
								judul = '$jdl',
								ringkasan = '$rngksn',
								news = '$news' where id_barang = '$id_barang'") or die (mysql_error());
	}
	
}

//header('location:adm_news');
echo"<meta http-equiv='refresh' content='0; url=adm_news'>";

?>
