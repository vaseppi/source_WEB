<?php
include 'yang_punya/connectsql.php';
error_reporting(0);
if (isset($_POST)) {	
	$nama = $_POST['nama'];
	$komentar = $_POST['komentar'];
	$tgl = $_POST['tgl'];
	$ipadd = $_POST['ipadd'];

	$sql = "insert into buku_tamu (nama, komentar, tgl, ipadd) values('$nama', '$komentar', '$tgl', '$ipadd')";
	$result = mysql_query($sql);
	}
	
		header("location:index.php");
?>