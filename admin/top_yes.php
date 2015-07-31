<?php
include "conn.php";
$id = $_GET['p'];
echo "<script language = javascript>alert('是否置顶');history.back();</script>";
$sql = "update userpost set top = 'T' where id = $id";
mysql_query($sql);
$url = "article.php";
echo "<script language = 'javascript' type = 'text/javascript'>"; echo "window.location.href = '$url'"; echo "</script>";
?>