<?php
include "conn.php";
$id = $_GET['p'];
echo "<script language = javascript>alert('是否要隐藏');history.back();</script>";
$sql = "update userpost set hide = 'F' where id = $id";
mysql_query($sql);
$url = "article.php";
echo "<script language = 'javascript' type = 'text/javascript'>"; echo "window.location.href = '$url'"; echo "</script>";

?>