<?php
include "connectsql.php";
mysql_query ("delete from user where id='$_GET[id]'");
?>
<script>document.location="admin.php"</script>