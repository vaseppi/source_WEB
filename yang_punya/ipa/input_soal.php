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
<title>Input Soal B.Indonesia</title>
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
		
		<center><p>&nbsp;</p><h2> Input Soal </a>
			<table>

				<form action="simpan.php" enctype="multipart/form-data" method="post" >

				<tr>
					<td width="150px">Pertanyaan</td>
					<td>:</td>
					<td>
					<textarea name="pertanyaan" rows="5" cols="50" required  /></textarea></td>
				</tr>

				<tr>
					<td>Pilihan A</td>
					<td>:</td>
					<td>
					<textarea name="jawab_a" rows="5" cols="50" required /></textarea></td>
				</tr>

				<tr>
					<td>Pilihan B</td>
					<td>:</td>
					<td>
					<textarea name="jawab_b" rows="5" cols="50" required /></textarea></td>
				</tr>

				<tr>
					<td>Pilihan C</td>
					<td>:</td>
					<td>
					<textarea name="jawab_c" rows="5" cols="50" required /></textarea></td>
				</tr>

				<tr>
					<td>Pilihan D</td>
					<td>:</td>
					<td>
					<textarea name="jawab_d" rows="5" cols="50" required /></textarea></td>
				</tr>

			<!--	<tr>
					<td>Pilihan E</td>
					<td>:</td>
					<td>
					<textarea name="jawab_e" rows="5" cols="50" required hidden /></textarea></td>
				</tr> -->

				<td><p>&nbsp;</p></td>

				<tr>
					<td>Kunci jawaban</td>
					<td>:</td>
					<td>
						&nbsp&nbsp&nbsp&nbsp&nbsp;
						<input type="radio" name="jawaban" value="a" />A</a>
						&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;
						<input type="radio" name="jawaban" value="b" />B</a>
						&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;
						<input type="radio" name="jawaban" value="c" />C</a>
						&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;
						<input type="radio" name="jawaban" value="d" />D</a>
						&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;
					<!--	<input type="radio" name="jawaban" value="e" />E</a> -->
					</td>
				</tr><p>&nbsp;</p>	
			</table><p>&nbsp;</p>
				<input type="submit" value="Simpan"onclick="return confirm('Soal akan tersimpan kedalam database')"/>
			</center>
				<div id="pilihan_soal" /><li><a href="index.php">|Kembali|</a></li></div><p>&nbsp;</p>	
	</div>
	
<div id="footer"/> 
		<marquee behavior="alternate" direction="right"> <h3> Copyright @ 2014 E-Learning Web &nbsp&nbsp&nbsp; Design By.E-Learning Web</h3> </marquee>
</div>


</div>	
</body>
</html>