<html>
<head>
<style>
	#back-to-top{
		position:fixed;
		bottom:100px;
		right:40px;
	}
	#back-to-top a{
		text-align:center;
		text-decoration:none;
		color:#d1d1d1;
		display:block;
		width:80px;		 
		-moz-transition:color 1s; 
		-webkit-transition:color 1s;
		-o-transition:color 1s;
	}
	#back-to-top a:hover{
		color:#979797;
	}
	#back-to-top a span{
		background:#d1d1d1;
		border-radius:6px;
		display:block;
		height:80px;
		width:80px;
		background:#d1d1d1 url(image/arrow-up.png) no-repeat center center;
		margin-bottom:5px;
		-moz-transition:background 1s;
		-webkit-transition:background 1s;
		-o-transition:background 1s;
	}
	#back-to-top a:hover span{
		background:#979797 url(image/arrow-up.png) no-repeat center center;
	}
  </style>
  <script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
  <script type="text/javascript">
	$(document).ready(function(){
	$("#back-to-top").hide();
	$(function () {
		$(window).scroll(function(){
		if ($(window).scrollTop()>100){
		$("#back-to-top").fadeIn(1500);
		}
		else
		{
		$("#back-to-top").fadeOut(1500);
		}
		});
		//back to top
		$("#back-to-top").click(function(){
		$('body,html').animate({scrollTop:0},1000);
		return false;
		});
		});
		});
</script>
	<?php	$tgl=date('d-m-Y'); ?>
</head>

<body  id="top">
<p id="back-to-top"><a href="#top"><span></span>  </a></p>
<link rel="stylesheet" type="text/css" href="../biar_bagus.css"> <!-- link css -->
<title>Bahasa Indonesia</title>


<div id="halaman" >
	<div id="header" ><center><img src="../image/logo_elearning.png" ></center></div>  <!-- Div Header -->

	<div id="menu" >
		<center>
			<li><a href="../index.php">Home</a></li>
			<li><a href="../ebook.php">E-Book</a></li>
			<li><a href="../soal.php">Soal</a></li>
			<li><a href="../about.php">About</a></li>		
		</center>
	</div>

<div id="tengah_soal" ><p>&nbsp;</p>
<center>
	<table border="0" >
		<tr>
			<td width="20px">&nbsp;&nbsp;</td>
		<td>
		
		
			<?php
			error_reporting(0);
			$koneksi_server=mysql_connect("localhost","u768019717_tugas","lorem@123");
			$database = mysql_select_db("u768019717_tugas");
			if(!$koneksi_server){
			echo "Jalur ke Servernya macet Gan..";
			}
			if(!$database){
			echo "Databasenya mana gan?";
			}

			if($_POST["btn_nilai"]){
			$jawaban = $_POST["jawaban"];
			$benar=0;
			if(count($jawaban) < 1 ){
			echo "<br>Anda Belum Menjawab Soal Satupun!!</p>";
			//echo "<a href=''><a></a>"; //back to beranda
			}else{
			foreach($jawaban as $id => $nilai){
			$data_soal = mysql_query("select * from soal_bahasa_indonesia where id = '$id'");
			$data_jawab = mysql_fetch_assoc($data_soal);
			if($data_jawab["jawaban"] == $nilai){
			$benar = $benar + 1 ;
			}

			}
			//Buat ngitungnya dewo
			$jumlah_soal = mysql_query("select count(*) from soal_bahasa_indonesia");
			$jum_soal = mysql_result($jumlah_soal,0);
			$nilai_per_soal = 100 / $jum_soal;
			$jawaban_salah = $jum_soal - $benar;
			$porsentase_benar = round ($benar / $jum_soal * 20,2) . ""; // jumlah soal di bagi 2 
			$porsentase_salah = round ($jawaban_salah / $jum_soal * 20,2) . "";
			echo "<center><span style='font-size:30px;'>Terimakasih telah mengerjakan Quiz Bahasa Indonesia </br></br></center>";
			echo "<center><span style='font-size:30px;'>Jawaban Benar :" . $porsentase_benar."</center>"; 
			echo "<center><span style='font-size:30px;'><br>Jawaban Salah : " . $porsentase_salah."</center>"; 
			$nilai = $nilai_per_soal * $benar;
			echo "<center><p>&nbsp;</p><p>&nbsp;</p><span style='font-size:40px;'>Nilai Anda : " . $nilai . "</center> "; 
			$nama = $_POST["nama_p"];
			$email = $_POST["email"];
			$tanggal = $_POST["tanggal"];
			$ipadd = $_POST["ipadd"];
			$matapelajaran = $_POST["matapelajaran"];
			mysql_query("INSERT INTO data_hasil_ujian (nama, email, matapelajaran, nilai, tanggal,ipadd) VALUES ('$nama','$email','$matapelajaran','$nilai','$tanggal','$ipadd')" , $koneksi_server);
			}
			}else{

			// mari kita mulai
			$nmr = 0;
			$soal = mysql_query("select * from soal_bahasa_indonesia ORDER BY RAND () "); //for random 
			//$soal = mysql_query("select * from soal_bahasa_indonesia");
			?>

			<form action="" method="post">
			<center><span style="font-size:22px;"><b>(SOAL - SOAL PEMBELAJARAN BAHASA INDONESIA)</b></p></p></center>
			<p>&nbsp;</p><p>&nbsp;</p>

			<table border="0" >
			<tr>
			<td width="5px"></td>
			<td><input type="text" align="center" name="nama_p" size="30" placeholder="Masukkan nama anda"   required ></td>
			<td width="200px"></td>
			<td><input type="email" name="email" align="center" size="30" placeholder="Masukkan email anda" required ></td>
			<input type="hidden" name="matapelajaran" value="B.Indonesia" /> <!-- Hidden Matapelajaran -->
			</tr>
			</table>


			<input type="hidden" name="tanggal" value="<?php echo $tgl ?>" /></br></br></p>
			<?php
			$ipadd = $_SERVER['REMOTE_ADDR']; ?>
			<input type="hidden" name="ipadd" value="<?php echo $ipadd; ?>" />
			<center><span style='font-size:22px;'><b>Selamat Mengerjakan</b><p>&nbsp;</p><p>&nbsp;</p>  </center>

			<?php
			while($data = mysql_fetch_assoc($soal)){
			$nmr++;
			if($data[image] == null){
			echo $nmr .".". $data["pertanyaan"]."<br>";
			}else{
			//echo $nmr .".". $data["pertanyaan"]." ".'<img src="' . $data[image] . '" height="50" width="50">'. "<br>";
			echo $nmr .".". $data["pertanyaan"]. "<br>";
			}
			echo "a.<input type='radio' value='a' name='jawaban[".$data["id"]."]'>" . $data["jawab_a"] ."<br>";
			echo "b.<input type='radio' value='b' name='jawaban[".$data["id"]."]'>" . $data["jawab_b"] ."<br>";
			echo "c.<input type='radio' value='c' name='jawaban[".$data["id"]."]'>" . $data["jawab_c"] ."<br>";
			echo "d.<input type='radio' value='d' name='jawaban[".$data["id"]."]'>" . $data["jawab_d"] ."<p></p>";
		//	echo "e.<input type='radio' value='e' name='jawaban[".$data["id"]."]'>" . $data["jawab_e"] ."<p></p>";
			}
			echo "<center><input type='submit' name='btn_nilai'value='Selesai Mengerjakan'></center>";
			}
			echo "</form>" 
			?>
		</td>
		</tr>	
	</table><p>&nbsp;</p></div>


		<div id="footer"> 
			<marquee behavior="alternate" direction="right"> <h3> Copyright @ 2014 E-Learning Web &nbsp&nbsp&nbsp; Design By.E-Learning Web</h3> </marquee>
		</div>
</div>			
</body>
</html>