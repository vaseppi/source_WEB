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
<link rel="stylesheet" type="text/css" href="biar_bagus.css"/> 
<p>&nbsp;</p>
<center>
	<div id="form_login" />
	<img src="image/logo_elearning.png" /><p>&nbsp;</p>
		<div class="style" />
			<form action="simpan_user_baru.php" enctype="multipart/form-data" method="post" >
				<input type='text' align="center" name='username' size="30px" placeholder='Username' required /><br>    				
				<p>&nbsp;</p>
				<input type='password' align="center" name='password' size="30px" placeholder='Password' required /><br>
				<p>&nbsp;</p>
			<input type='submit' name='submit' class='btn' value="Tambah User"><p>&nbsp;</p>
		</div>
	</div>
</center>
</body>
</html>
