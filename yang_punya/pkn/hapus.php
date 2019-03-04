<?php
include "../connectsql.php";
mysql_query ("delete from soal_pkn where id='$_GET[id]'");
?>
<script>document.location="index.php"</script>