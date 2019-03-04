<?php
session_start();
$username = $_SESSION['username'];
$isLoggedIn = $_SESSION['isLoggedIn'];
 
if($isLoggedIn != '1'){
    session_destroy();
    header('Location: ../index.php');
}
?>
<html>
<body><head>
<link rel="stylesheet" type="text/css" href="../biar_bagus.css"> <!-- link css -->
<title>Soal</title>
	<style>
		tbody > tr:nth-child(2n+1) > td, tbody > tr:nth-child(2n+1) > th {
			background-color: #ededed;
		}
		table{
			width: 100%;
			margin: auto;
			border-collapse: collapse;
			box-shadow: darkgrey 3px;
		}
		thead tr {
			background-color: #36c2ff;
		}
	</style></head><body>
<div id="halaman" >
	<div id="header" ><center><img src="../image/logo_elearning.png" ></center></div>  <!-- Div Header -->

	<div id="menu_admin" >
		<center>
			<li><a href="../berhasil_login.php">Home</a></li>
			<li><a href="../kategori_soal.php">Input Soal</a></li>
			<li><a href="../nilai/index.php">Hasil Quiz</a></li>
			<li><a href="../admin.php">Add User</a></li>
			<li><a href="../logout.php">Keluar</a></li>
		</center>
	</div>
	<div id="tengah_soal" ><p>&nbsp;</p><center><h2> Kumpulan Soal Bahasa Inggris</h2></center>

			<!-- Table mulai -->
			<div id="pilihan_soal" >
					<li><a href="../kategori_soal.php">|Kembali|</a></li>
					<li><a href="input_soal.php">|Input Soal Baru|</a></li>
			</div>
		<center>
				<table border="1" cellpadding="2" background="#CC9900">
					<thead>
						<tr align="center">
							<td>No</td>
							<td>Pertanyaan</td>
							<td>Pilihan A</td>
							<td>Pilihan B</td>
							<td>Pilihan C</td>
							<td>Pilihan D</td>
							<td>Kunci Jawaban</td>
							<td>Function</td>
						</tr>
					</thead>
				
				<tbody>

<?php
	 include "../connectsql.php";
	 $query="select * from soal_bahasa_inggris ORDER BY id";
	 $no = 1;
	 $hasil=mysql_query($query);
	 while ($data=mysql_fetch_array($hasil)){ ?>
		<tr align="center">
			 <td><? echo $no++ ?></td>
			 <td><? echo $data['pertanyaan'] ?></td>
			 <td><? echo $data['jawab_a'] ?></td>
			 <td><? echo $data['jawab_b'] ?></td>
			 <td><? echo $data['jawab_c'] ?></td>
			 <td><? echo $data['jawab_d'] ?></td>
			 <td><? echo $data['jawaban'] ?></td>
			 <td><a href="hapus.php?id=<? echo $data['id'] ?>"onclick="return confirm('Anda yakin akan menghapus data?')">Hapus</a>
			 <a href="edit.php?id=<? echo $data['id'] ?>">edit</a></td>
		</tr><?}?>
				</tbody>
			</table>
		</center><p>&nbsp;</p>	<!-- Tabel Selesai -->	
	</div>				
<div id="footer"> 
		<marquee behavior="alternate" direction="right"> <h3> Copyright @ 2014 E-Learning Web &nbsp&nbsp&nbsp; Design By.E-Learning Web</h3> </marquee>
</div>
</div>	
</body>