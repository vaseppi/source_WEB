
<?php
include 'connectsql.php';
error_reporting(0);

if (isset($_POST)) 	{
	$username = $_POST['username'];
//	$password = $_POST['password'];
	$password=md5($_POST['password']);
	
	
	$insert = "insert into user set username = '$username', password = '$password'";
	  if (mysql_query($insert))
	  {
		echo "<h3>User berhasil ditambahkan</h3>";
	  }
	  else {
		echo "<h3>User gagal ditambahkan</h3>";
	  }
	}
	header("location:admin.php");
	
?>
