<?php
session_start();
$username = $_SESSION['username'];
$isLoggedIn = $_SESSION['isLoggedIn'];
 
if($isLoggedIn != '1'){
    session_destroy();
    header('Location: index.php');
}
?>
<html><head>
<link rel="stylesheet" type="text/css" href="biar_bagus.css"> <!-- link css -->
<title>User</title>
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
	</style>
</head>
<div id="halaman" >
	<div id="header" ><center><img src="../image/logo_elearning.png" ></center></div>  <!-- Div Header -->

	<div id="menu_admin" >
		<center>
			<li><a href="berhasil_login.php">Home</a></li>
			<li><a href="kategori_soal.php">Input Soal</a></li>
			<li><a href="nilai/index.php">Hasil Quiz</a></li>
			<li><a href="komentar.php">Komentar</a></li>
			<li><a href="admin.php">Add User</a></li>
			<li><a href="logout.php">Keluar</a></li>		
		</center>
	</div>

	<div id="tengah_soal" ><p>&nbsp;</p>
		<div id="didalam_tengah_soal" >
			<center><h2> User </h2></center>
			<div id="pilihan_soal" >
				<li><a href="tambah_user.php">|Tambah User|</a></li>
			</div>
		<table border="1" align="center" cellpadding="2" background="#CC9900">
			<thead>
				<tr>
					<td bgcolor="#36c2ff" align="center" >No </td>
					<td bgcolor="#36c2ff" align="center" >Username </td>
					<td bgcolor="#36c2ff" align="center" >Function </td>
				</tr>
			</thead>
			<tbody>
			
	<?php
	 include "connectsql.php";
	 $query="select * from user ORDER BY id";
	 $no = 1;
	 $hasil=mysql_query($query);
	 while ($data=mysql_fetch_array($hasil)){ ?>
		<tr align="center">
			 <td><? echo $no++ ?></td>
			 <td><? echo $data['username'] ?></td>
			 <td><a href="hapus_user.php?id=<? echo $data['id'] ?>"onclick="return confirm('Anda yakin akan menghapus data?')">Hapus</a>
		</tr><?}?>	
			
		</tbody>
	</table>
		</div><p>&nbsp;</p>
	</div>
	
	<div id="footer"> 
			<marquee behavior="alternate" direction="right"> <h3> Copyright @ 2014 E-Learning Web &nbsp&nbsp&nbsp; Design By.E-Learning Web</h3> </marquee>
	</div>


</div>	
</body>