<?php
include "connectsql.php";
mysql_query ("delete from buku_tamu where id='$_GET[id]'");
?>
<script>document.location="komentar.php"</script>