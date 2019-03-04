<?php
include "../connectsql.php";
mysql_query ("delete from data_hasil_ujian where id='$_GET[id]'");
?>
<script>document.location="index.php"</script>