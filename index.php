<html>
<body>
<head>
<?php $tgl=date('d-m-Y'); ?>
</head>
<link rel="stylesheet" type="text/css" href="biar_bagus.css"> <!-- link css -->
<title>Home</title>
<div id="halaman" >
	<div id="header" ><center><img src="image/logo_elearning.png" ></center></div>  <!-- Div Header -->

	<div id="menu" >
		<center>
			<li><a href="index.php">Home</a></li>
			<li><a href="ebook.php">E-Book</a></li>
			<li><a href="soal.php">Soal</a></li>
			<li><a href="about.php">About</a></li>		
		</center>
	</div>

		
	<div id="kiri" >
	<img src="image/elearning2.png" height="100" width="100" align="right" >	
		<center>
			<h2>E-learning</h2><p></p><h2> SMP Kelas 9</h2><p>&nbsp;</p>
			<h3> Bahasa Indonesia </h3>
			<h3> Bahasa Inggris </h3>
			<h3> IPA </h3>
			<h3> IPS </h3>
			<h3> PPKN </h3>
			<h3> Seni Rupa </h3>
		</center>
	</div>
		
	<div id="kanan" align="center"><h4>Silahkan Isi Buku Tamu</h4><p></p>
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
				
				include 'yang_punya/connectsql.php';
				
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
	</div> 

	
	<div id="tengah" style="text-align:justify;"><p></p>
		<img src="image/dunia.png" width="120" height="100" align="left" />
		<span><a>Istilah e-Learning mengandung pengertian yang sangat luas, sehingga banyak pakar yang menguraikan tentang definisi
			e-Learning dari berbagai sudut pandang.
			Salah satu definisi yang cukup dapat diterima banyak pihak misalnya [Hartley, 2001] yang menyatakan: e-Learning merupakan suatu metode belajar mengajar yang memungkinkan tersampaikannya bahan ajar ke siswa dengan menggunakan media Internet,
			Intranet atau media jaringan komputer lain.
			[Glossary, 2001] menyatakan suatu definisi yang lebih luas bahwa: e-Learning adalah sistem pendidikan yang menggunakan aplikasi elektronik untuk mendukung belajar mengajar dengan media Internet, jaringan komputer, maupun komputer standalone.
			Dari puluhan atau bahkan ratusan definisi yang muncul dapat kita simpulkan bahwa sistem atau konsep pendidikan yang memanfaatkan teknologi informasi dalam proses belajar mengajar dapat disebut sebagai suatu e-Learning.</a>
		</span>
	</div>

	<div id="footer"> 
		<marquee behavior="alternate" direction="right"> <h3> Copyright @ 2014 E-Learning Web &nbsp&nbsp&nbsp; Design By.E-Learning Web</h3> </marquee>
	</div>
</div>	
</body>
</html>