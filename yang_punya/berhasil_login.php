<?session_start();
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
<title>Home</title>
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

		
	<div id="kiri" align="center">
			<p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>
			<h2>Selamat Datang</h2><p></p>
			<h2><?php echo $username ?> </h2>
	</div>
		
	<div id="kanan" align="center"><h4> Buku Tamu Anda</h4><p>&nbsp;</p>
		<center>
			<table border="0" >	
				<form action="simpan_buku_tamu.php" method="post" >
				<tr><td><input type="text" name="nama" placeholder="Masukkan Nama Anda" required ></td></tr>
				<tr><td><textarea name="komentar" rows="5" cols="25" placeholder="Tulis Komentar anda" required ></textarea></td></tr>	
				<tr><td><input type="hidden" name="tgl" value="<?php echo $tgl ?>" /></td></tr>
				<tr><td><?php
				$ipadd = $_SERVER['REMOTE_ADDR']; ?>
				<input type="hidden" name="ipadd" value="<?php echo $ipadd; ?>" /></td></tr>
				
				<tr><td><center><input type="submit" value="Post" ></center></td></tr>							
			</table><p>&nbsp;</p>
			
			<marquee behavior="scroll" direction="up" height="150" scrollamount="2" width="auto" >
				<table border="0">
					<td>

				<?php
				
				include 'connectsql.php';
				
				$query = "SELECT * FROM buku_tamu ";
                $exe = mysql_query($query);
                while($row = mysql_fetch_assoc($exe)){
                       
                $a = $row['tgl'];
				$b = $row['nama'];
                $c = $row['komentar'];
                       
                    echo "	<tr><td><p>&nbsp;</p></td></tr>
							<tr><td>$a</td></tr> 
							<tr><td><font size='5px' color='white'><center>$b</center></font></td></tr>
							<tr><td><center>$c</center></td></tr>";
                    }
                
                ?>
					</td>
				</table>
			</marquee>
		</center>
	</div> 

	
	<div id="tengah" style="text-align:justify;"><p></p>
		<img src="../image/dunia.png" width="120" height="100" align="left" />
		<span><a>Istilah e-Learning mengandung pengertian yang sangat luas, sehingga banyak pakar yang menguraikan tentang definisi
			e-Learning dari berbagai sudut pandang.
			Salah satu definisi yang cukup dapat diterima banyak pihak misalnya [Hartley, 2001] yang menyatakan: e-Learning merupakan suatu metode belajar mengajar yang memungkinkan tersampaikannya bahan ajar ke siswa dengan menggunakan media Internet,
			Intranet atau media jaringan komputer lain.
			[Glossary, 2001] menyatakan suatu definisi yang lebih luas bahwa: e-Learning adalah sistem pendidikan yang menggunakan aplikasi elektronik untuk mendukung belajar mengajar dengan media Internet, jaringan komputer, maupun komputer standalone.
			Dari puluhan atau bahkan ratusan definisi yang muncul dapat kita simpulkan bahwa sistem atau konsep pendidikan yang memanfaatkan teknologi informasi dalam proses belajar mengajar dapat disebut sebagai suatu e-Learning.</a>
		</span>
	</div>

	<div id="footer"/> 
		<marquee behavior="alternate" direction="right"> <h3> Copyright @ 2014 E-Learning Web &nbsp&nbsp&nbsp; Design By.E-Learning Web</h3> </marquee>
	</div>
			
</div>	
</body>
</html>