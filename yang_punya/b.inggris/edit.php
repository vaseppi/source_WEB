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
<title>Edit Soal B.Inggris</title>
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
		<p>&nbsp;</p>
		<center>
			<div id="pilihan_soal" />
				<li><a href="input_soal.php">|Input Soal|</a></li>	
				<li><a href="index.php">|Kembali|</a></li>
			</div>
		</center>	
				<p>&nbsp;</p>
			<?php
			include("../connectsql.php");
			$no = $_GET['id']; //get the no which will updated
			$query = "SELECT * FROM soal_bahasa_inggris WHERE id =$no"; //get the data that will be updated
			$hasil = mysql_query($query);
			$data  = mysql_fetch_array($hasil);
			?>


		<center>
				<form method="post" action="update.php?id=<?php echo $no; ?>">
			<table>

				<tr>
					<td width="150px">PERTANYAAN</font></td>
					<td>:</td>
					<td>
					<textarea name="pertanyaan" rows="5" cols="40"><?php echo $data['pertanyaan'];?></textarea>
					</td>
				</tr>

				<td width="200px"></td>

				<tr>
					<td>PILIHAN A</font></td>
					<td>:</td>
					<td>
					<textarea name="jawab_a" rows="3" cols="40"><?php echo $data['jawab_a'];?></textarea>
					</td>
				</tr>

				<tr>
					<td>PILIHAN B</font></td>
					<td>:</td>
					<td>
					<textarea name="jawab_b" rows="3" cols="40"><?php echo $data['jawab_b'];?></textarea>
					</td>
				</tr>

				<tr>
					<td>PILIHAN C</font></td>
					<td>:</td>
					<td>
					<textarea name="jawab_c" rows="3" cols="40"><?php echo $data['jawab_c'];?></textarea>
					</td>
				</tr>

				<tr>
					<td>PILIHAN D</font></td>
					<td>:</td>
					<td>
					<textarea name="jawab_d" rows="3" cols="40"><?php echo $data['jawab_d'];?></textarea>
					</td>
				</tr>

				<tr>
					<td>PILIHAN E</font></td>
					<td>:</td>
					<td>
					<textarea name="jawab_e" rows="3" cols="40"><?php echo $data['jawab_e'];?></textarea>
					</td>
				</tr>

				<tr>
					<td>KUNCI JAWABAN</font></td>
					<td>:</td>
					<td>
					<input type="text" name="jawaban" value="<?php echo $data['jawaban'];?>" />
					</td>
				</tr>
			</table><p>&nbsp;</p>
			
			<input type="submit" value="Simpan"onclick="return confirm('anda yakin ingin menyimpan data ini?')"/><p>&nbsp;</p>
	</div>
	
	<div id="footer"/> 
		<marquee behavior="alternate" direction="right"> <h3> Copyright @ 2014 E-Learning Web &nbsp&nbsp&nbsp; Design By.E-Learning Web</h3> </marquee>
	</div>


</div>	
</body>
</html>