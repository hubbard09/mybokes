<?php
include "conn.php";
$id = $_GET['p'];
$sql = "select * from admin_reply where id = $id";
$ru = mysql_query($sql);
$find = mysql_fetch_array($ru);
$sql = "select messageid from message where id = {$find['messageid']}";
$query = mysql_query($sql);
$row = mysql_fetch_array($query);
$sql = "update admin_reply set audit = 'F' where id = $id";
mysql_query($sql);
$url = "post.php?p={$row['messageid']}";
echo "<script language = 'javascript' type = 'text/javascript'>"; echo "window.location.href = '$url'"; echo "</script>";
exit;
?>