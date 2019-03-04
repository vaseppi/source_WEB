<?php
include "../connectsql.php";  
$apps = $_POST['matapelajaran'];
?>
<?php
session_start();
$username = $_SESSION['username'];
$isLoggedIn = $_SESSION['isLoggedIn'];
 
if($isLoggedIn != '1'){
    session_destroy();
    header('Location:../index.php');
}
?>

<style>
    tbody > tr:nth-child(2n+1) > td, tbody > tr:nth-child(2n+1) > th {
        background-color: #ededed;
    }
    table{
        width: 100%;
        margin: auto;
        border-collapse: collapse;
        box-shadow: darkgrey 3px;
		font: 15px Arial Rounded MT Bold; - See more at: 
    }
    thead tr {
        background-color: #36c2ff;
    }
</style>

<title> <?php echo $apps ?></title>

<center>
<font style="Arial Rounded MT Bold"><font size="5">
<a> Nilai Matapelajaran <?php echo $apps ?> </a>
</font></font>
</center>
<p></p>


<font size="3">
<table border="1" align="center" cellpadding="2" background="#CC9900">
    <thead>
        <tr>
            <td bgcolor="#36c2ff"> <div align="center" class="style2">No</div>
            <td bgcolor="#36c2ff"> <div align="center" class="style2">Nama</div>
			<td bgcolor="#36c2ff"> <div align="center" class="style2">Email</div>
			<td bgcolor="#36c2ff"> <div align="center" class="style2">Matapelajaran</div>
			<td bgcolor="#36c2ff"> <div align="center" class="style2">Nilai</div>
			<td bgcolor="#36c2ff"> <div align="center" class="style2">Tanggal</div>
			<td bgcolor="#36c2ff"> <div align="center" class="style2">IP Address</div>
        </tr>
	</thead>

<?php
	$app=$_POST['matapelajaran'];
	
		$query=mysql_query("SELECT * FROM data_hasil_ujian WHERE matapelajaran='$app' ");
		$no = 1;
		while($row = mysql_fetch_object($query))
		{
			echo "<tr>";
			echo "<td height='50' align='center'>".$no++;"</div></td>";
			echo "<td align='center'>".$row->nama."</div></td>";
			echo "<td align='center'>".$row->email."</div></td>";
			echo "<td align='center'>".$row->matapelajaran."</div></td>";
			echo "<td align='center'>".$row->nilai."</div></td>";
			echo "<td align='center'>".$row->tanggal."</div></td>";
			echo "<td align='center'>".$row->ipadd."</div></td>";

			echo "</tr>";
			
		}
?>
</table>
</font>
