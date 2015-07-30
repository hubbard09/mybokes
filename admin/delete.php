<?php
include "conn.php";
$id = $_GET['p'];
echo "<script language = javascript>alert('是否真的要删除');history.back();</script>";
$sql = "DELETE FROM userpost WHERE id = $id ";
mysql_query($sql);
$sql = "DELETE FROM message WHERE  messageid = $id ";
mysql_query($sql);
$url = "article.php";
echo "<script language = 'javascript' type = 'text/javascript'>"; echo "window.location.href = '$url'"; echo "</script>";
?>