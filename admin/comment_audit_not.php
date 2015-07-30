<?php
include "conn.php";
$id = $_GET['p'];
$sql = "select messageid from message where id = $id";
$query = mysql_query($sql);
$row = mysql_fetch_array($query);
$sql = "update message set audit = 'F' where id = $id";
mysql_query($sql);
$url = "post.php?p={$row['messageid']}";
echo "<script language = 'javascript' type = 'text/javascript'>"; echo "window.location.href = '$url'"; echo "</script>";
exit;
?>