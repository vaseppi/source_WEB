<?php
include "../connectsql.php";
mysql_query ("delete from soal_bahasa_inggris where id='$_GET[id]'");
?>
<script>document.location="index.php"</script>