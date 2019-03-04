<title> Halaman login Admin </title>
<?php
session_start();
error_reporting(0);
include 'connectsql.php'; 
if(!empty($_POST)){
     
    $username = $_POST['username'];
    $password = md5($_POST['password']);
	
    $sql = "select * from user where username='".$username."' and password='".$password."'";
    #echo $sql."<br />";
    $query = mysql_query($sql) or die (mysql_error());
 
    // pengecekan query valid atau tidak
    if($query){
        $row = mysql_num_rows($query);
         
        // jika $row > 0 atau username dan password ditemukan
        if($row > 0){
            $_SESSION['isLoggedIn']=1;
            $_SESSION['username']=$username;
            header('Location: berhasil_login.php');
        }else{
			
            echo "Username Atau Password Salah";
		
        }
    }
}
?>
<html>
<body>
<link rel="stylesheet" type="text/css" href="biar_bagus.css"/> 
<p>&nbsp;</p>
<center>
	<div id="form_login" />
	<img src="image/logo_elearning.png" /><p>&nbsp;</p>
		<div class="style" />
			<form action="index.php" method="post">
				<input type='text' align="center" name='username' size="30px" placeholder='Username' required /><br>    				
				<p>&nbsp;</p>
				<input type='password' align="center" name='password' size="30px" placeholder='Password' required /><br>
				<p>&nbsp;</p>
			<input type='submit' value='Masuk' >
		</div>
	</div>
</center>
</body>
</html>