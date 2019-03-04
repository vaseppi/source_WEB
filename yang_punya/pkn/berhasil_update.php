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
<title>Soal Berhasil di Update</title>
<div id="halaman" />
	<div id="header" /><center><img src="../image/logo_elearning.png" /></center></div>  <!-- Div Header -->

	<div id="menu_admin" />
		<center>
			<li><a href="../berhasil_login.php">Home</a></li>
			<li><a href="../kategori_soal.php">Input Soal</a></li>
			<li><a href="../nilai/index.php">Hasil Quiz</a></li>
			<li><a href="../admin.php">Add User</a></li>
			<li><a href="../Logout">Keluar</a></li>
		</center>
	</div>
	
	<div id="tengah_soal" />
		<p>&nbsp;</p>
		<center>
			<div id="pilihan_soal" />
				<li><a href="input_soal.php">|Input Soal|</a></li>	
				<li><a href="index.php">|Kembali|</a></li>
			</div>		<p>&nbsp;</p>		<p>&nbsp;</p>
	
<?php
include_once "../connectsql.php";
		$pertanyaan = '';
		$jawab_a = '';
		$jawab_b = '';
		$jawab_c = '';
		$jawab_d = '';
		$jawab_e = '';
		$jawaban= '';
//	$id =decrypt($_GET['id']); 	
	$id =($_GET['id']); 	
		
    $sql = mysql_query("SELECT * FROM soal_pkn WHERE id=$id") or die (mysql_error());
	while($row = mysql_fetch_object($sql))
	{	
		$pertanyaan = $row->pertanyaan;
		$jawab_a = $row->jawab_a;
		$jawab_b = $row->jawab_b;
		$jawab_c = $row->jawab_c;
		$jawab_d = $row->jawab_d;
		$jawab_e = $row->jawab_e;
		$jawaban = $row->jawaban;
			
	}
	
?> 
		<center>
			<font size="5"/><a> Soal Berhasil Di update </a></font>
		</center>
		<p>&nbsp;</p>

		<center>
		<table>
			<tr>
				<td width="150px">PERTANYAAN</font></td>
				<td>:</td>
				<td>
				<textarea rows="5" cols="40"><?php echo $pertanyaan ?></textarea>
				</td>
			</tr>

			<tr>
				<td>PILIHAN A</font></td>
				<td>:</td>
				<td>
				<textarea rows="5" cols="40"><?php echo $jawab_a ?></textarea>
				</td>
			</tr>

			<tr>
				<td>PILIHAN B</font></td>
				<td>:</td>
				<td>
				<textarea rows="5" cols="40"><?php echo $jawab_b ?></textarea>
				</td>
			</tr>

			<tr>
				<td>PILIHAN C</font></td>
				<td>:</td>
				<td>
				<textarea rows="5" cols="40"><?php echo $jawab_c?></textarea>
				</td>
			</tr>

			<tr>
				<td>PILIHAN D</font></td>
				<td>:</td>
				<td>
				<textarea rows="5" cols="40"><?php echo $jawab_d ?></textarea>
				</td>
			</tr>

		<!--	<tr>
				<td>PILIHAN E</font></td>
				<td>:</td>
				<td>
				<textarea rows="5" cols="40"><?php echo $jawab_e ?></textarea>
				</td>
			</tr>
		-->
			<tr>
				<td>KUNCI JAWABAN</font></td>
				<td>:</td>
				<td><?php echo $jawaban ?></td>
			</tr>
		</table>
		</center>		<p>&nbsp;</p>		<p>&nbsp;</p>
	</div>


	<div id="footer"/> 
		<marquee behavior="alternate" direction="right"> <h3> Copyright @ 2014 E-Learning Web &nbsp&nbsp&nbsp; Design By.E-Learning Web</h3> </marquee>
</div>


</div>	
</body>
</html>
