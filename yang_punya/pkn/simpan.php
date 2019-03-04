<?php
include '../connectsql.php';
if (isset($_POST)) {	

	$pertanyaan = $_POST['pertanyaan'];
	$jawab_a = $_POST['jawab_a'];
	$jawab_b = $_POST['jawab_b'];
	$jawab_c = $_POST['jawab_c'];
	$jawab_d = $_POST['jawab_d'];
	$jawab_e = $_POST['jawab_e'];
	$jawaban = $_POST['jawaban'];
	
		
	$sql = "insert into soal_pkn (pertanyaan, jawab_a, jawab_b, jawab_c, jawab_d, jawab_e, jawaban) values('$pertanyaan', '$jawab_a', '$jawab_b', '$jawab_c', '$jawab_d', '$jawab_e' ,'$jawaban')";
	$result = mysql_query($sql);

	$id = mysql_insert_id();

	$fileName = "image/" . $_FILES['image']['name']; //nama File + foto
	$move = move_uploaded_file($_FILES['image']['tmp_name'], "image/".$_FILES['image']['name']);

	$sql = "UPDATE soal_pkn SET image='$fileName' WHERE id=$id ";
	
	$result = mysql_query($sql);
	
	}


	
//	header("location:done.php?id=".encrypt($id));
	header("location:done.php?id=$id");
?>