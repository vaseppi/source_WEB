<?php
session_start();
$username = $_SESSION['username'];
$isLoggedIn = $_SESSION['isLoggedIn'];
 
if($isLoggedIn != '1'){
    session_destroy();
    header('Location: index.php');
}
?>
<html>
<body>
<link rel="stylesheet" type="text/css" href="../biar_bagus.css"/> <!-- link css -->
<title>Input Berhasil</title>
<div id="halaman" />
	<div id="header" /><center><img src="../image/logo_elearning.png" /></center></div>  <!-- Div Header -->

	<div id="menu_admin" />
		<center>
			<li><a href="../berhasil_login.php">Home</a></li>
			<li><a href="../kategori_soal.php">Input Soal</a></li>
			<li><a href="../nilai/index.php">Hasil Quiz</a></li>
			<li><a href="../admin.php">Add User</a></li>
			<li><a href="../logout.php">Keluar</a></li>
		</center>
	</div>
	
	<div id="tengah_soal" />

		<?php
		include_once "../connectsql.php";
		/*
		function decrypt($sData){
		$url_id=base64_decode($sData);
		$id=(double)$url_id/525325.24;
		return $id;
		}
		*/
		$pertanyaan = '';
		$jawab_a = '';
		$jawab_b = '';
		$jawab_c = '';
		$jawab_d = '';
		$jawab_e = '';
		$jawaban= '';
	
//	$id =decrypt($_GET['id']); 	
	$id =($_GET['id']); 	
		
    $sql = mysql_query("SELECT * FROM soal_bahasa_indonesia WHERE id=$id") or die (mysql_error());
	while($row = mysql_fetch_object($sql))
	{	
		$pertanyaan = $row->pertanyaan;
		$jawab_a = $row->jawab_a;
		$jawab_b = $row->jawab_b;
		$jawab_c = $row->jawab_c;
		$jawab_d = $row->jawab_d;
		$jawab_e = $row->jawab_e;
		$jawaban = $row->jawaban;
		$image = $row->image;
	}
?> 
		<p>&nbsp;</p>	
		<center><h2> Input Soal </a>
			<table>
				<tr>
					<td width="150px">Pertanyaan</td>
					<td>:</td>
					<td>
					<textarea rows="5" readonly cols="50"><?php echo $pertanyaan;?></textarea>
				</tr>

				<tr>
					<td>Pilihan A</td>
					<td>:</td>
					<td>
					<textarea rows="5" readonly cols="50"><?php echo $jawab_a;?></textarea>
				</tr>

				<tr>
					<td>Pilihan B</td>
					<td>:</td>
					<td>
					<textarea rows="5" readonly cols="50"><?php echo $jawab_b;?></textarea>
				</tr>

				<tr>
					<td>Pilihan C</td>
					<td>:</td>
					<td>
					<textarea rows="5" readonly cols="50"><?php echo $jawab_c;?></textarea>
				</tr>

				<tr>
					<td>Pilihan D</td>
					<td>:</td>
					<td>
					<textarea rows="5" readonly cols="50"><?php echo $jawab_d;?></textarea>
				</tr>

			<!--	<tr>
					<td>Pilihan E</td>
					<td>:</td>
					<td>
					<textarea rows="5" readonly cols="50"><?php echo $jawab_e;?></textarea>
				</tr>
			-->
				<td><p>&nbsp;</p></td>

				<tr>
					<td>Kunci jawaban</td>
					<td>:</td>
					<td><?php echo $jawaban;?></td>
				</tr>
			</table><p>&nbsp;</p>
					<div id="pilihan_soal" />
						<li><a href="input_soal.php">|Input Soal|</a></li>	
						<li><a href="index.php">|Kembali|</a></li>
					</div>
		</center><p>&nbsp;</p>
		

	</div>
	
	
	<div id="footer"/> 
		<marquee behavior="alternate" direction="right"> <h3> Copyright @ 2014 E-Learning Web &nbsp&nbsp&nbsp; Design By.E-Learning Web</h3> </marquee>
</div>


</div>	
</body>
</html>
