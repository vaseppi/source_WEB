<?php
include '../connectsql.php';

	$pertanyaan = $_POST['pertanyaan'];
	$jawab_a = $_POST['jawab_a'];
	$jawab_b = $_POST['jawab_b'];
	$jawab_c = $_POST['jawab_c'];
	$jawab_d = $_POST['jawab_d'];
	$jawab_e = $_POST['jawab_e'];
	$jawaban = $_POST['jawaban'];
	
 $id =$_GET['id'];
 echo $id;
//query for update data in database
 $query = "UPDATE soal_pkn SET pertanyaan ='$pertanyaan', jawab_a ='$jawab_a', jawab_b='$jawab_b', jawab_c='$jawab_c', jawab_d= '$jawab_d', jawab_e='$jawab_e', jawaban='$jawaban' WHERE id='$id'";
 $hasil = mysql_query($query);

 
	header("location:berhasil_update.php?id=$id");
?>