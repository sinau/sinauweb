<?php
$koneksi = mysql_connect("localhost","root","")
or die ("ga konek".mysql_error());

if($koneksi){
	mysql_select_db("sinau")
	or die ("ga masuk database".mysql_error());
}
?> 