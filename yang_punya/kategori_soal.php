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
<link rel="stylesheet" type="text/css" href="biar_bagus.css"/> <!-- link css -->
<title>Soal</title>
<div id="halaman" />
	<div id="header" /><center><img src="image/logo_elearning.png" /></center></div>  <!-- Div Header -->

	<div id="menu_admin" />
		<center>
			<li><a href="berhasil_login.php">Home</a></li>
			<li><a href="kategori_soal.php">Input Soal</a></li>
			<li><a href="nilai/index.php">Hasil Quiz</a></li>
			<li><a href="komentar.php">Komentar</a></li>
			<li><a href="admin.php">Add User</a></li>
			<li><a href="logout.php">Keluar</a></li>		
		</center>
	</div>

	<div id="tengah_soal" /><p>&nbsp;</p>
		<div id="pilihan_soal" />
			<center>
			<h2> Kumpulan Soal </h2><p>&nbsp;</p>
				<table border="0" />
					<center>
					<tr>
						<td width="300px" align="center" /><li><a href="b.indonesia/index.php" />Bahasa Indonesia</a></li></td>
						<td width="300px" align="center" /><li><a href="ipa/index.php" />IPA</a></li></td>
						<td width="300px" align="center" /><li><a href="b.inggris/index.php" />Bahasa Inggris</a></li></td>
					</tr>
					
					<tr>
						<td width="100px" align="center" /><li><a href="#" />	&nbsp;	</a></li></td>
						<td width="100px" align="center" /><li><a href="#" />	&nbsp;	</a></li></td>
						<td width="100px" align="center" /><li><a href="#" />	&nbsp;	</a></li></td>
					</tr>
					
					<tr>
						<td width="300px" align="center" /><li><a href="ips/index.php" />IPS</a></li></td>
						<td width="300px" align="center" /><li><a href="seni_rupa/index.php" />Seni Rupa</a></li></td>
						<td width="300px" align="center" /><li><a href="pkn/index.php" />PPKN</a></li></td>
					</tr>
					</center>
				</table>
			<center>
		</div><p>&nbsp;</p>
	</div>

	<div id="footer"/> 
		<marquee behavior="alternate" direction="right"> <h3> Copyright @ 2014 E-Learning Web &nbsp&nbsp&nbsp; Design By.E-Learning Web</h3> </marquee>
	</div>
			
</div>	
</body>