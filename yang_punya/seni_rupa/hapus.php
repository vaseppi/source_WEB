<?php
include "../connectsql.php";
mysql_query ("delete from soal_seni_rupa where id='$_GET[id]'");
?>
<script>document.location="index.php"</script>